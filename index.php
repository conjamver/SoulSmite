<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        
        <!-- My stylesheet -->
        <link rel="stylesheet" href="css/main.css">
     
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
        <!--Enabling good view on mobile devices-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <article id="character-creation">
        <div class="container">
            <!--Character Creation Area -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!--Form Area-->
                    <form id="character-form">
                        <h2 class="text-center">Welcome Mortal</h2>
                        <!--Name Area-->
                        <div class="form-group">
                            <label for="hero_name">What is your name:</label>
                            <input type="text" class="form-control" id="hero_name" placeholder="e.g. Ned Stark">
                        </div>
                        <!--Hero Selection area-->
                        <label>Choose your class:</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="class-select">Demon Slayer
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="class-select">Blood Thief
                            </label>
                        </div>
                        <br>
                        <!--Hero details area-->
                        <div class="form-group">
                            <div class="row">
                                <!--Profile image of the hero-->
                                <div class="col-4">
                                    <img class="img-fluid" src="https://via.placeholder.com/150">
                                </div>
                                <!--Stats and details about the hero-->
                                <div class="col-8">
                                    <h5>Demon slayer</h5>
                                    <p>Born from a bloodline of warriors, you start with high health and decent damage. </p>
                               
                                </div>
                            </div>
                        </div>
                        <!--Start game-->
                        <button type="submit" class="btn btn-primary">Start your journey</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        </article>

    </body>
    
</html>