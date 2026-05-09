<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru!</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="welcome.html" method="post">
        <label>First Name:</label> <br/>
        <input type="text" name="fname" placeholder="Masukkan Nama Depan Anda"/> <br/>
        <br/>
        <label>Last Name:</label> <br/>
        <input type="text" name="fname" placeholder="Masukkan Nama Belakang Anda"> <br/>
        <br/>
        <label>Gender:</label> <br>
        <input type="radio" name="Gender" value="1">Male <br/>
        <input type="radio" name="Gender" value="2">Female <br/>
        <input type="radio" name="Gender" value="3">Other <br/>
        <br/>
        <label>Nationality</label> <br/>
        <select name="Nationality">
            <option value="1">Indonesian</option>
            <option value="2">Singaporean</option>
            <option value="3">Malaysian</option>
            <option value="4">Australian</option>
        </select>
        <br/>
        <br/>
        <label>Language Spoken:</label> <br/>
        <input type="checkbox" name="language" value="1">Bahasa Indonesia <br/>
        <input type="checkbox" name="language" value="2">English <br/>
        <input type="checkbox" name="language" value="3">Other <br/>
       <br/>
       <label>Bio:</label> <br/>
       <textarea name="Bio" cols="30" rows="10"></textarea> <br/>
       <br/>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>