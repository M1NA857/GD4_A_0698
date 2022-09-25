<?php
include '../component/sidebar.php'; 
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM movies WHERE id='$id'") or die(mysqli_error($con));
$data = mysqli_fetch_array($query);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
            <h4>EDIT MOVIE</h4>
            </div>
            <hr>
            <div class="card-body">
                <form action="../process/editMovieProcess.php?id=<?php echo $id ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmaill" class="form-label">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $data['name']; ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmaill" class="form-label">Genre</label>
                        <select class="form-select" aria-label="Default select example" name="genre" id="genre" value="<?php echo $data['genre']; ?>">
                            <option value="Misteri">Misteri</option>
                            <option value="Drama">Drama</option>
                            <option value="Action">Action</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmaill" class="form-label">Release</label>
                        <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp" value="<?php echo $data['realese']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmaill" class="form-label">Season</label>
                        <input class="form-control" id="season" name="season" aria-describedby="emailHelp" value="<?php echo $data['season']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmaill" class="form-label">Synopsis</label>
                        <input class="form-control"  id="synopsis" name="synopsis" aria-describedby="emailHelp" value="<?php echo $data['synopsis']; ?>">
                    </div>
                    <div class="d-grip gap-2">
                        <button type="submit" class="btn btn-primary" name="edit">Save</button>
                    </div>
                </form>
                </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
