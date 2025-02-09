<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sell</title>
  <style>
     .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Seller Form</h2>
    <form id="sellerForm">
        <label for="itemType">Item Type:</label>
        <select id="itemType" name="itemType" required>
            <option value="">Select Item Type</option>
            <option value="land">Land</option>
            <option value="house">House</option>
            <option value="car">Car</option>
            <option value="motorcycle">Motorcycle</option>
        </select>

        <label for="itemTitle">Title:</label>
        <input type="text" id="itemTitle" name="itemTitle" placeholder="Enter title for your listing" required>

        <label for="itemDescription">Description:</label>
        <textarea id="itemDescription" name="itemDescription" placeholder="Enter a detailed description" rows="5" required></textarea>

        <label for="itemPrice">Price ($):</label>
        <input type="number" id="itemPrice" name="itemPrice" placeholder="Enter the price" required>

        <label for="itemImage">Upload Image:</label>
        <input type="file" id="itemImage" name="itemImage" accept="image/*" required>

        <button type="submit">Submit Listing</button>
    </form>
</div>
</body>
</html>