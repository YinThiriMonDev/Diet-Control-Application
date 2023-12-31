<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Prata" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">


    <script src="menu.js"></script>

    <title>Menu</title>
</head>

<body>
    <div class="header">
        <a href="index2.php">Calorie Counter By Diet Counter</a>
    </div>
    <div id="menu_select">
        <div id="menu-selection">

            <div class="btn-group-toggle" data-toggle="buttons">
                <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
                <button type="button" class="btn btn-outline-primary meal active">
                    <input type="radio" name="options" id="breakfast" autocomplete="off" checked> Breakfast
                </button>
                <button type="button" class="btn btn-outline-primary meal">
                    <input type="radio" name="options" id="lunch" autocomplete="off"> Lunch
                </button>
                <button type="button" class="btn btn-outline-primary meal">
                    <input type="radio" name="options" id="dinner" autocomplete="off"> Dinner
                </button>
                <button type="button" class="btn btn-outline-primary meal">
                    <input type="radio" name="options" id="dinner" autocomplete="off">Snack
                </button>
            </div>

            <div class="inputWithIcon">
                <input id="myInput" class="form-control" type="text" placeholder="Search...">
                <i class="material-icons">search</i>
            </div>
            <select id="selection" class="form-control shadow-sm p-3 mb-5 bg-white rounded" multiple size="5">
                <!-- append choice here -->
                <!--
          <option data-toggle="modal" data-target="#foodModal">Pizza</option>
          -->
            </select>
        </div>

        <div id="selectedfood" class="border-left">
            <h3>Food Selected</h3>
            <ul id="food-list"></ul>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="foodModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nutrition Facts</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <table>
                        <tr>
                            <h5 id="foodName">Name</h5>

                        </tr>
                        <tr>
                            <td>
                                <h6 class="info">Serving Size: </h6>
                            </td>
                            <td>
                                <h6 id="servingText"></h6>
                            </td>
                        </tr>


                        <tr>


                            <td>
                                <h6 class="info">Calories:</h6>
                            </td>
                            <td>
                                <h6 id="foodCalories"></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="info">Protein:</h6>
                            </td>
                            <td>
                                <h6 id="foodProtein"></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="info">Carbs:</h6>
                            </td>
                            <td>
                                <h6 id="foodCarbs"></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="info">Fats:</h6>
                            </td>
                            <td>
                                <h6 id="foodFats"></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="info" id="servingSize">Servings: </h6>

                            </td>
                            <td>
                                <input id="stufftoadd" type=number min="1" placeholder="Serving Size" value="1" oninput="validity.valid||(value='');">

                            </td>
                        </tr>

                    </table>


                </div>
                <div class="modal-footer">
                    <button id="close-item" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="add-item" type="button" class="btn btn-primary" data-dismiss="modal">Add item</button>
                </div>
            </div>
        </div>
    </div>

    <footer id="summary" class="border-top">
        <h2>Summary</h2>
        <table>
            <tr>
                <td class="sum" id="calories"> Calories: 0 </td>
                <td class="sum" id="protein">Protein: 0</td>
                <td class="sum" id="carbs">Carbohydrates: 0</td>
                <td class="sum" id="fats">Fats: 0</td>
                <td><button id="complete-btn" type="button" class=" .col-sm-3btn btn-primary btn-lg">More Details</button> </td>
            </tr>
        </table>
    </footer>
</body>

</html>
<link rel="stylesheet" href="menu.css">
