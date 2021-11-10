<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="icon"
        href="https://banner2.cleanpng.com/20180711/vg/kisspng-201617-premier-league-english-football-league-l-lion-emoji-5b460f06eeac18.5589169115313180229776.jpg"
        sizes="16x16">
    <title>Jquery Filters</title>
</head>
<script>
    $(document).ready(function () {
        $("#clubSearch").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#englishTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<style>
    body {
        font-family: 'Encode Sans', sans-serif;
        padding-bottom: 50px;
    }

    table {
        border-collapse: collapse;
        width: 100%;

    }

    td,
    th {
        color: white;
        background-color: #3D195B;
        text-align: center;
        padding: 8px;
    }

    tr {
        border: 1px solid #3D195B;
    }

    td {
        color: black;
        background-color: white;
        text-align: center;
    }

    #left {
        text-align: left;
    }

    #logo {
        display: block;

        width: 20%;

        margin-left: auto;

        margin-right: auto;


    }
    #clubSearch{
        
        border: 3px solid #3D195B;
        padding: 10px;
        border-radius: 0;
    }


    .border-3 {
        border-color: #5aa7a7 !important;
        border-width: 2px !important;
        background-color: white;
    }
</style>
</head>

<body>
    <div class="container-fluid" style="background-color: #F50157;">

        <img src="https://download.logo.wine/logo/Premier_League/Premier_League-Logo.wine.png"
            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="pllogo"
            id="logo">

    </div>
    <div class="container">
        <div class="container pt-sm-3">
            <div class="row">
                <div class="col">
                    <h2 style="font-weight: 500;">League Table</h2>
                </div>
            </div>
            <br>
        </div>
        <div class="container">
            
            
                <input type="text" id="clubSearch" class="form-control" placeholder="Enter a club here...">
            
        
        </div>

        <div class="container mt-sm-3">
            <table class="table table-hover">

                <thead>
                    <tr style="font-weight: 600;">
                        <th>Pos</th>
                        <th style="text-align: left;">Club</th>
                        <th>MP</th>
                        <th>W</th>
                        <th>D</th>
                        <th>L</th>
                        <th>GF</th>
                        <th>GA</th>
                        <th>GD</th>
                        <th>Pts</th>
                    </tr>
                </thead>
                <tbody id="englishTable">
                    <tr>
                        <td>1</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/fhBITrIlbQxhVB6IjxUO6Q_48x48.png"
                                style="width: 30px;"> Chelsea </td>
                        <td>7</td>
                        <td>5</td>
                        <td>1</td>
                        <td>1</td>
                        <td>15</td>
                        <td>3</td>
                        <td>12</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/0iShHhASp5q1SL4JhtwJiw_48x48.png"
                                style="width: 30px;"> Liverpool </td>
                        <td>7</td>
                        <td>4</td>
                        <td>3</td>
                        <td>0</td>
                        <td>15</td>
                        <td>3</td>
                        <td>12</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/z44l-a0W1v5FmgPnemV6Xw_48x48.png"
                                style="width: 30px;"> Man City </td>
                        <td>7</td>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>14</td>
                        <td>3</td>
                        <td>11</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png"
                                style="width: 30px;"> Man United </td>
                        <td>7</td>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>14</td>
                        <td>6</td>
                        <td>8</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/C3J47ea36cMBc4XPbp9aaA_48x48.png"
                                style="width: 30px;"> Everton </td>
                        <td>7</td>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>13</td>
                        <td>8</td>
                        <td>5</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/EKIe0e-ZIphOcfQAwsuEEQ_48x48.png"
                                style="width: 30px;"> Brighton </td>
                        <td>7</td>
                        <td>4</td>
                        <td>2</td>
                        <td>1</td>
                        <td>8</td>
                        <td>5</td>
                        <td>3</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/QOUce0WQBYqnkSmN6_TxGA_48x48.png"
                                style="width: 30px;"> Brentford </td>
                        <td>7</td>
                        <td>3</td>
                        <td>3</td>
                        <td>1</td>
                        <td>10</td>
                        <td>6</td>
                        <td>4</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/k3Q_mKE98Dnohrcea0JFgQ_48x48.png"
                                style="width: 30px;"> Tottenham </td>
                        <td>7</td>
                        <td>4</td>
                        <td>0</td>
                        <td>3</td>
                        <td>6</td>
                        <td>10</td>
                        <td>-4</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/bXkiyIzsbDip3x2FFcUU3A_48x48.png"
                                style="width: 30px;"> West Ham </td>
                        <td>7</td>
                        <td>3</td>
                        <td>2</td>
                        <td>2</td>
                        <td>14</td>
                        <td>10</td>
                        <td>4</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/uyNNelfnFvCEnsLrUL-j2Q_48x48.png"
                                style="width: 30px;"> Aston Villa </td>
                        <td>7</td>
                        <td>3</td>
                        <td>1</td>
                        <td>3</td>
                        <td>10</td>
                        <td>9</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/4us2nCgl6kgZc0t3hpW75Q_48x48.png"
                                style="width: 30px;"> Arsenal </td>
                        <td>7</td>
                        <td>3</td>
                        <td>1</td>
                        <td>3</td>
                        <td>5</td>
                        <td>10</td>
                        <td>-5</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/-WjHLbBIQO9xE2e2MW3OPQ_48x48.png"
                                style="width: 30px;"> Wolves </td>
                        <td>7</td>
                        <td>3</td>
                        <td>0</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>-1</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/UDYY4FSlty6fXFBzvFfcyw_48x48.png"
                                style="width: 30px;"> Leicester City </td>
                        <td>7</td>
                        <td>2</td>
                        <td>2</td>
                        <td>3</td>
                        <td>9</td>
                        <td>12</td>
                        <td>-3</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/8piQOzndGmApKYTcvyN9vA_48x48.png"
                                style="width: 30px;"> Crystal Palace </td>
                        <td>7</td>
                        <td>1</td>
                        <td>4</td>
                        <td>2</td>
                        <td>8</td>
                        <td>11</td>
                        <td>-3</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/lHr1L31i7aJS-O8tUdHOIQ_48x48.png"
                                style="width: 30px;"> Watford </td>
                        <td>7</td>
                        <td>2</td>
                        <td>1</td>
                        <td>4</td>
                        <td>7</td>
                        <td>10</td>
                        <td>-3</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/5dqfOKpjjW6EwTAx_FysKQ_48x48.png"
                                style="width: 30px;"> Leeds United </td>
                        <td>7</td>
                        <td>1</td>
                        <td>3</td>
                        <td>3</td>
                        <td>7</td>
                        <td>14</td>
                        <td>-7</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/y1V4sm2SEBiWUPRIYl5rfg_48x48.png"
                                style="width: 30px;"> Southampton </td>
                        <td>7</td>
                        <td>0</td>
                        <td>4</td>
                        <td>3</td>
                        <td>5</td>
                        <td>10</td>
                        <td>-5</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/teLLSaMXim_8BA1d93sMng_48x48.png"
                                style="width: 30px;"> Burnley </td>
                        <td>7</td>
                        <td>0</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>11</td>
                        <td>-6</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/96CcNNQ0AYDAbssP0V9LuQ_48x48.png"
                                style="width: 30px;"> Newcastle </td>
                        <td>7</td>
                        <td>0</td>
                        <td>3</td>
                        <td>4</td>
                        <td>8</td>
                        <td>16</td>
                        <td>-8</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td id="left"><img
                                src="https://ssl.gstatic.com/onebox/media/sports/logos/y-we_-8ySOubta5psWzDoA_48x48.png"
                                style="width: 30px;"> Norwich City </td>
                        <td>7</td>
                        <td>0</td>
                        <td>1</td>
                        <td>6</td>
                        <td>2</td>
                        <td>16</td>
                        <td>-14</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <p>Last updated 4th October 2021 at 15:14</p>

            <p>Please note: All times UK. Tables are subject to change. </p>
        </div>
    </div>


</body>

</html>
