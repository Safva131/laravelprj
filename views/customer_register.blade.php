<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer register</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <label for="">Customer Name</label>
        <input type="text" name="customer_name" id=""><br><br>
        <label for="">Contact</label>
        <input type="text" name="customer_contact" id=""><br><br>
        <label for="">Country</label>
        <select name="customer_country" id="">
            <option value=""></option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="China">China</option>
        </select><br><br>
        <label for="">Status</label>
        <input type="text" name="customer_status" id=""><br><br>
        <button type="submit">Submit</button>

        @if(isset($error))
        <p>{{$error}}</p>
        @endif
    </form>
</body>
</html>