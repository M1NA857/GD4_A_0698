<?php
include '../component/sidebar.php';
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>ADD SERIES</h4>
    </div>
    <hr>
    <div class="card-body">
        <form action="../process/addSeriesProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre[]" id="genre" value="<?php echo $data['genre']; ?>">
                    <option value="">Select Genre :</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Horror">Horror</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Mystery">Mystery</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Release</label>
                <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Episode</label>
                <input class="form-control" id="episode" name="episode" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Season</label>
                <input class="form-control" id="season" name="season" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">Synopsis</label>
                <input class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp">
            </div>
            <div class="d-grip gap-2">
                <button type="submit" class="btn btn-primary" name="add">Save</button>
                <button id="cancel" name="cancel" class="btn btn-default" style="background-color: red;color: white">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>