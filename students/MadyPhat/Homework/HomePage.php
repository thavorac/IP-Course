<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <style>
            th{
                text-align: left;
            }
            table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            }
            div{
            border: 1px solid black;
            padding: 10px;
            }

            .Impression{
                border: none;
            }

            h3{
                display: inline-block;
            }

            form{
                margin-top: 20px;
                float: right;
            }
            ul {
                list-style-type: none;
            }
            ul li{
                float: left;
                margin: 30px;
                padding: 30px;
            }
        </style>
    </head>
    <body>
        <a href="url">Home</a>
        <h1>Welcome to my blog!</h1>
        
        <div class="Impression">
            <h3>Total Impression</h3>
            <form>
                <select name="Option" id="Option">
                    <option value="This month">This Month</option>
                    <option value="Last month">Last Month</option>
                </select>
            </form>
        </div>

        <ul>
            <li>
                <div>
                    <img src="visitor.png" alt="vistitor" width="40px" height="40px"><br>
                    <?php  echo "200 vistior"  ?>
                </div>
            </li>
            <li>
                <div>
                    <img src="like.png" alt="vistitor" width="40px" height="40px"><br>
                    <?php echo "200 Likes" ?>
                </div>
            </li>
            <li>
                <div>
                    <img src="dislike.png" alt="vistitor" width="40px" height="40px"><br>
                    <?php echo "2 Dislikes" ?>
                </div>
            </li>
        </ul>



        <br>
        <table style="width:100%">
            <tr>
              <th>Time</th>
              <th>Visting Page</th> 
              <th>Impression</th>
              <th>Visting Device</th>
            </tr>
            <tr>
                <td>Yesterday 3am</td>
                <td>Home Page</td>
                <td>Good</td>
                <td>Chrome</td>
            </tr>
            <tr>
                <td>Yesterday 5am</td>
                <td>Post 1</td>
                <td>Good</td>
                <td>iPad</td>
            </tr>
            <tr>
                <td>Today 7am</td>
                <td>Post 2</td>
                <td>  </td>
                <td>Fire Fox</td>
            </tr>
        </table>
    </body>
</html>