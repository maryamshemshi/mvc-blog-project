<!DOCTYPE html>
<head>
    <link href="://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head><!------ Include the above in your HEAD tag ---------->
<style>
    .require {
        color: #666;
    }
    label small {
        color: #999;
        font-weight: normal;
    }
</style>
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <h1>Edit post</h1>

            <form class="was-validated" action="/index" method="POST" >

                <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                <input type="text" class="form-control" name="slug">
                <span class="help-block">Field not entered!</span>
        </div>

        <div class="form-group">
            <label for="title">Title <span class="require">*</span></label>
            <input type="text" class="form-control" name="title" />
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="5" class="form-control" name="description" ></textarea>
        </div>

        <div class="form-group">
            <p><span class="require">*</span> - required fields</p>
        </div>

        <div class="form-group">
            <select class="custom-select" required>
                <option value="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile"></label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
                <button class="btn btn-default">
                    Cancel
                </button>
            </div>

        </div>
        </form>
    </div>

</div>


</html>
