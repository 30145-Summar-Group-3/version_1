
<html>
<head>
<title>Insert Form </title>
</head>
<body>
<center>

<form action= "/insert" method='post'>

    <table>
        <tr>
            {{csrf_field()}}
            <td> YOUR  NAME </td>
            <td> <input type='text' name= 'name'></td>
        </tr>
        <tr>
            <td> YOUR COLLAGE</td>
            <td> <input type='text' name= 'collage'></td>
        </tr>
        <tr>
            <td> YOUR email</td>
            <td> <input type='text' name= 'email'></td>
        </tr>
        
        <tr>
            <td> <input type='submit' name= 'submit' value='Add'></td>
        </tr>
    </table>



</form>

</center>
</body>
</html>