<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script src="finishpage.js"></script>
    <script src="menu.js"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,700|Prata"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="finishpage.css" />
    <title>Finish!</title>
  </head>

  <body>
    <div class="header">
      <a href="index2.php">CatCount</a>
    </div>

    <h1 id="test">Here Is Your Result!</h1>

    <div id="results">
      <span id="calresult"></span>
      <span id="proresult"></span>
      <span id="carbresult"></span>
      <span id="fatresult"></span>
    </div>

    <div>
      <table class="columns" align="center">
        <tr>
          <td>
            <div id="piechart"></div>
            <div id="hint" align="center">
              Click on the graph for more details
            </div>
          </td>
          <td>
            <div id="barchart"></div>
          </td>
        </tr>
      </table>
    </div>
    <div class="wrapper">
      <button
        onclick="location.href='menu.php'"
        type="button"
        class="againButton"
      >
        Calculate Again!
      </button>
      <button
        onclick="location.href='home.php'"
        type="button"
        class="againButton"
      >
        Go Back to Home Page
      </button>
    </div>
    <!-- Modal -->
    <div id="menuModal" class="modal">
      <div id="content" class="modal-content">
        <p>some text in the modal...</p>
      </div>
    </div>
  </body>
</html>
