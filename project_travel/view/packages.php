<?php
//requring files
require_once('../model/packagesModel.php');
$package =  get_all_package_data();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>WanderLuxe Tours - Packages</title>
</head>
<body>
    <table border="1" width="100%">
    <tr>
       

        <td ><img src="assets/image/package/logo.jpg" alt="logo" width="20px" height="20px"></td>
        <td align="center"><h2>WanderLuxe Tours</h2> </td>
    </tr>

    <tr>
        <!-- sidebar -->
        <td>
            <h3>Search Packages</h3>
            <form action="">
                <input type="text" name="" id="" placeholder="package Name">
                <input type="submit" value="Search packages">
            </form>

           

        </td>
        <td colspan="2">
            <br>
            <br>
                <table border="1">


                    <?php
                        foreach($package as $package){
                            
                            ?>
                                <tr>
                                    <td><img width="120px" src="<?php echo $package['image_url']; ?>" alt=""></td>
                                    <td><h2><a href="all_packages.php?id=<?php echo $package['id']; ?>"></a></h2></td>
                                    <td><p>	Destination Name: <strong><?php echo $package['name']; ?></strong></p></td>

                                    
                                    <td><p>Description: <strong><?php echo $package['details']; ?></strong></p></td>
                                    <td><p>Price: <strong><?php echo $package['price']; ?></strong></p></td>
                                    <td><a href="all_packages.php?id=<?php echo $package['id']; ?>">Order Now</a></td>


                                </tr>
                            <?php
                        }
                    ?>



                </table>
            <br>
            <br>

        </td>
    </tr>
    <tr>
        <td colspan="3">Copyright &copy; 2023 WanderLuxe Tours. All rights are reserved.</td>
    </tr>

    </table>
</body>
</html>

