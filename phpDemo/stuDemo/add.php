<html>
    <head>
        <title>学生信息管理系统</title>
    </head>
    <body>
        <center>
            <?php
                include ("menu.php");
            ?>
            <h3>增加学生信息</h3>
            <form action="action.php?action=add" method="post">
                <table>
                    <tr>
                        <td>姓名</td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>