<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<section class="bg-dark">
    <form action="/editNews" method="post" class="mb-0" enctype="multipart/form-data">
        <div class="container ">

            <?php foreach ($result as $record) { ?>
                <div class="row justify-content-center align-items-center">
                    <h3 class="text-white text-center">Inter New News</h3>
                    <div class="col-6">
                        <div class="card shadow-2-strong bg-secondary">
                            <div class="card-body p-1 py-3 text-center">
                                <div class="form-outline mb-4">
                                    <label class="form-label">Title</label>
                                    <input name="id" type="hidden" class="form-control form-control-lg"
                                           value="<?= $record['id']; ?>"/>
                                    <input name="title" type="text" class="form-control form-control-lg"
                                           value="<?= $record['title']; ?>" style="background-color: #e3f2fd"
                                           placeholder="Title..." required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card shadow-2-strong bg-secondary" style="border-radius: 1rem">
                            <div class="card-body p-1 py-3 text-center">
                                <div class="form-outline mb-4">
                                    <label class="form-label">News summary</label>
                                    <input name="short_news" type="text" class="form-control form-control-lg"
                                           value="<?= $record['short_news']; ?>" style="background-color: #e3f2fd"
                                           placeholder="News summary..." required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-1">
                        <div class="card shadow-2-strong bg-secondary" style="border-radius: 1rem;">
                            <div class="card-body p-1 py-2 text-center">
                                <div class="form-outline mb-4">
                                    <label class="form-label">Description</label>
                                    <div class="input-group">
                                    <textarea rows="15" style="background-color: #e3f2fd" placeholder="Description..."
                                              type="text" class="form-control" name="full_news"
                                              required <?= $record['full_news']; ?>></textarea>
                                    </div>

                                </div>
                                <div class="float-end mb-3">
                                    <label class="form-label float-end">Image</label>
                                    <input name="pic_news" class="form-control" style="background-color: #e3f2fd"
                                           type="file"
                                           required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <div class="form-outline mb-2">
                            <button class="btn btn-outline-dark btn-lg w-25" type="submit">Post</button>
                        </div>
                    </div>

                </div>
            <?php } ?>

        </div>
    </form>
</section>