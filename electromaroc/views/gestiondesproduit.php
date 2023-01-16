<?php
require_once("../controllers/get_product_controlletr.php");

$products= new getproduct();
$product=$products->getto();

session_start();


if (isset($_SESSION['username'])) 
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
<a href="../views/add_product.php"
  class="px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">Add</a>
<table class="table_of_product table-auto min-w-ful">
    <thead class="bg-white border-b md:w-32 lg:w-48">
        <tr>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">id</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">référence</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">libelle</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">code_bar</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">prix d'achat</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">prix finale</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">prix offer</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">photo</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">id_catigorie</th>
            <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($product as $elements):?>
        <tr class="bg-gray-100 border-b md:w-32 lg:w-48">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $elements['id']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['référence']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['libelle']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['code_bar']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['prix_d_achat']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['prix_final']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['prix offer']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['photo']; ?></td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><?php echo $elements['forkey']; ?></td>
            <td> 
                <form method="POST" action="../controllers/delete.product.controller.php">
                    <input type="hidden" name="id" value="<?php echo $elements['id']; ?>" >
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