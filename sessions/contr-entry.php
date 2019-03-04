<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Contractor entry form</h3>
<form method="post" action="contr-entry-proc.php">
    First name: <input type="text" name="first_name" placeholder="First name"><br>
    Last name: <input type="text" name="surname" placeholder="Surname"><br>
    Email:  <input type="email" name="email" placeholder="Email"><br>
    Address: <input type="text" name="address" placeholder="Address"><br>
    Post code: <input type="text" name="post_code" placeholder="Post code"><br>
    Business name: <input type="text" name="business_name" placeholder="Business name"><br>
    Category: <select name="category">

        <option value="">Select</option>
        <option value="Beautician">Beautician</option>
        <option value="Caterer">Caterer</option>
        <option value="Jeweller">Jeweller</option>
        <option value="Venue">Venue</option>
        <option value="Flowers">Flowers </option>
        <option value="Fhotography">Photography </option>
        <option value="Music">Music</option>
        <option value="Decor">Decor</option>
        <option value="Wedding Planners">Wedding Planners</option>
        <option value="Dressers">Dresses</option>
    </select> <br>

    <input type="submit">
</form>

</body>
</html>