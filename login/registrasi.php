<html>
<head>
<title>Registrasi User</title>
</head>
<style>
    body {
        background-image: linear-gradient(to left bottom, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
       
    }

    #card {
        background: #FFC0CB;
        border-radius: 20px;
        box-shadow: 10px 20px 80px rgba(0, 0, 0, 0.65);
        height: 300px;
        margin: 6rem auto 8.1rem auto;
        width: 600px;
    }

    #card-content {
        padding: 20px 100px;
    }

    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 22px;
        padding-top: 13px;
        text-align: center;
    }

    .underline-title {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 5px;
        margin: -1.1rem auto 0 auto;
        width: 300px;
    }

    a {
        text-decoration: none;
    }

    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }

    #forgot-pass {
        color: #7a110a;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }

    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }

    .form-border {
        background: -webkit-linear-gradient(right, #7a110a, #7a110a);
        height: 1px;
        width: 100%;
    }

    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 140px;
    }
    #signup {
    color: #7a110a;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(center, #ec59ff, #4ae7ff);
    border: none;
    border-radius: 300px;
    box-shadow: 0px 1px 8px #7a110a;
    cursor: pointer;
    color: blue;
    font-family: "Raleway SemiBold", sans-serif;
    height: 60px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 300px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #ff0400;
}
#copy{
  font-family: "Raleway Thin", sans-serif;
  color:#ffffff;
  letter-spacing: 1px;
  padding-bottom: 2px;
  padding-top: 20px;
  text-align: center;
}
</style>
<body>
<div id="card">
<div id="card-content">
    <div id="card-title">
        <h1>Registrasi</h1>
        <div class="underline-title"></div>
    </div>
<form name="registrasi" method="post" action="index.php">
<table>
<tr>
<td>Id</td>
<td><input type="text" name="id" size="30"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size="30"></td>
</tr>
<tr>
<td>Usia</td>
<td><input type="text" name="usia" size="30"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" size= "30"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" size="30"></td>
</tr>
<td>
<button type="submit" name="simpan" value="submit">Simpan</button>

</td>
</tr>
</table>
</form>
<script language="JavaScript" type="text/JavaScript">
