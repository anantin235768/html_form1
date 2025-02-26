<html>
    <head>
        <title> From submission</title>
    </head>
    <body>
        <form action="action_page.php" method="post">
            <table border="1">
                <tr>
                    <th>Quetion</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><Input type="text"> name</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name ="gender"value="male"> Male </td>
                    <td><input type="radio" name ="gender"value="female">female</td>
                </tr>
                <tr>
                    <td> Country</td>
                    <td>
                        <select name="country">
                            <option value="PH">Philippines </option>
                            <option value="Aus"Austrial> </option>
                            <option value="Us"United state> </option>
                        </select>
                    </td>
                </tr>
                    <td> conspan="2">
                        <Input type = "submit"value="save">
                </td>
                </tr>
                </table>
            </form>
        </body>
</html>