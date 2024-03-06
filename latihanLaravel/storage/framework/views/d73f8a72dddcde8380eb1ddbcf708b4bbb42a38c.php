<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Buat Account Baru</h1>

    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        <?php echo csrf_field(); ?>
    <label for="">First Name:</label><br>
    <input type="text" name="firstname"><br><br>

    <label for="">Last Name:</label><br>
    <input type="text" name="lastname"><br><br>

    <label for="">Gender:</label><br>
    <input type="radio" name="gender" id="male">Male <br>
    <input type="radio" name="gender" id="female">Female <br>
    <input type="radio" name="gender" id="other">Other <br><br>

    <label for="">Nationality:</label>
    <select name="nationality" id="">
        <option value="">Indonesian</option>
        <option value="">Australia</option>
        <option value="">Singapore</option>
        <option value="">Malaysia</option>
    </select>
    <br><br>
    <label for="">Language Spoken:</label> <br>
    <input type="checkbox" name="language" id="">Bahasa Indonesia <br>
    <input type="checkbox" name="language" id="">English <br>
    <input type="checkbox" name="language" id="">Arabic <br>
    <input type="checkbox" name="language" id="">Japanese <br> <br>

    <label for="">Bio:</label><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea> <br><br>

    <input type="submit" value="sign up">
    </form>

</body>
</html><?php /**PATH D:\Bootcamp\Tugas\IM-Sanbercode-Laravel-Web-Dev-Batch-54\latihanLaravel\resources\views/register.blade.php ENDPATH**/ ?>