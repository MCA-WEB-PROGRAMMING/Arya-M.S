
<html>
    <head>
        <title>REGISTRATION FORM </title>
        <style>
            body{background:rgb(240, 207, 227);
            }
        </style>
    </head>

    <body >
        <h1 align="center">REGISTRATION FORM OF BOOK< /h1>
        <form>
            <table>
                <tr>
                    <td >
                    <label > Title:</label>
                    </td>
                    <td>
                    <input type="text" autofocus required id="A1"></td>
                </tr>
                <tr>
                    <td >
                    <label >Author :</label></td>
                    <td>
                    <input type="text" id="A2"></td>
                </tr>
                <tr>
                    <td >
                    <label > Edition</label></td><br>
                    <td>
                    <input type="text" id="A3" ></td>
                </tr>
                
                <input type="button" onclick="validate()" value="SUBMIT"></td>
                </tr>

            </table>
        </form>
        <?php
            function validate(){
           var=0;
           if(document.getElementId('A1').checked){
               var=var+1;
           }
           if(document.getElementId('A2').checked){
            var=var+1;
        }
        if(document.getElementId('A2').checked){
            var=var+1;
        }
        ?>
    </body>
</html>