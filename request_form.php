<!DOCTYPE html>
<html>
<head>
    <title>RGUCreate</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>

    <nav>

        <div class="main.wrapper">
            <ul>
                <li> <a href="requestor.php">RGUCreate</a> </li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <div class="title-wrap">
        <h1 class="underline">Create Our Tomorrow</h1>
    </div>


    <form class="form-request" action="request_script.php" method="POST">
        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <input id="title" name="title" placeholder="Title" type="text" class="form-control here" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="urname" class="col-4 col-form-label">Your name</label>
            <div class="col-8">
                <input id="urname" name="urname" placeholder="Name" type="text" class="form-control here" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Content type</label>
            <div class="col-8">
                <select id="content" name="content" class="custom-select" required="required">
                    <option value="Video">Video</option>
                    <option value="Photo">Photo</option>
                    <option value="Podcast">Podcast</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Platform(s)</label>
            <div class="col-8">
                <label class="custom-control custom-checkbox">
                    <input name="platforms" type="checkbox" class="custom-control-input" value="Youtube">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">YouTube</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input name="platforms" type="checkbox" class="custom-control-input" value="Instagram">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Instagram</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input name="platforms" type="checkbox" class="custom-control-input" value="Facebook">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Facebook</span>
                </label>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label" for="notes">Notes and additional information</label>
            <div class="col-8">
                <textarea id="notes" name="notes" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>