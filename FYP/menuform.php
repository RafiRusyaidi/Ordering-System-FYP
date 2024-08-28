<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>
    <link rel="stylesheet" href="menuform.css">
</head>
<body>

    <div class="form-container">
        <h2>Add New Menu Item</h2>
        <form>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type">
                    <option value="food">Food</option>
                    <option value="drink">Drink</option>
                    <option value="set_dinner">Set Dinner</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter menu name">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" id="picture" name="picture">
            </div>

            <div class="form-group">
                <button type="submit">Add Menu</button>
            </div>
        </form>
    </div>

</body>
</html>
