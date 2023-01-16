<?php
require_once("../controllers/getcategory.php");

$products= new getcategory();
$product=$products->getto();

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="./admin.css">
    <title>Document</title>
</head>
<body>
<a href="../views/gestionDeCategoey.php"
  class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">Add</a>
<table class="table_of_product table-auto min-w-ful">
    <thead class="bg-white border-b md:w-32 lg:w-48">
        <tr>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">nom de category</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">description de category</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">photo de category</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($product as $elements):?>
        <tr class="bg-gray-100 border-b md:w-32 lg:w-48">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $elements['nom_categore']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['description_categore']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['photo_catigorie']; ?></td>


            <td> 
                <form method="POST" action="../controllers/deteCategory.controller.php">
                    <input type="hidden" name="value1" value="<?php echo $elements['nom_categore']; ?>" >
                   <button type="submit" name="submit">
                    delete
                   </button>
                </form>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>