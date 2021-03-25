<?php $this->assign('title', 'Search Keywords'); ?>
<!-- File export table -->
<section id="file-export">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title"> Search Keywords</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="<?= $this->Url->build(['action' => 'add']); ?>" class="btn round btn-raised btn-dark">
                                <i class="fa fa-plus"></i>&nbsp; New Search Keyword
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <!-- <p class="card-text">Exporting data from a table can often be a key part of a complex application. The Buttons extension
                            for DataTables provides three plug-ins that provide overlapping functionality for data export.</p> -->

                        <table class="table table-striped table-bordered file-export index_table custom_table" id="categories_table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Sic4Category</th>
                                    <th>Show on Business</th>
                                    <th>Show on Filter</th>
                                    <!-- <th>Icon</th> -->
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sn = 1;
                                foreach ($searchKeywords as $searchKeyword) : ?>
                                    <tr>
                                        <td>
                                            <?= $sn++ ?>
                                        </td>
                                        <td>
                                            <?= h($searchKeyword->name) ?>
                                        </td>
                                        <td>
                                            <?= !empty($searchKeyword->sic4category) ? h($searchKeyword->sic4category->name) : "Not Selected" ?>
                                        </td>
                                        <td>
                                            <?= $searchKeyword->enable_business ? "YES" : "NO" ?>
                                        </td>
                                        <td>
                                            <?= $searchKeyword->enable_filter ? "YES" : "NO" ?>
                                        </td>
                                        <!-- <td>
                                            <?= h($searchKeyword->icon) ?>
                                        </td> -->

                                        <td class="actions">

                                            <?= $this->Html->link(__('<i class="fa fa-edit"></i>'), ['action' => 'edit', $searchKeyword->id], ['class' => 'btn btn-xs btn-raised btn-warning btn-icon mr-1 btn-sm', 'escape' => false]) ?>
                                            <?= $this->Form->postLink(__('<i class="fas fa-trash-alt"></i>'), ['action' => 'delete', $searchKeyword->id], ['confirm' => __('Are you sure you want to delete # {0}?', $searchKeyword->id), 'class' => 'btn btn-xs btn btn-raised btn-icon btn-danger mr-1 btn-sm', 'escape' => false]) ?>


                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Sic4Category</th>
                                    <th>Show on Business</th>
                                    <th>Show on Filter</th>
                                    <!-- <th>Icon</th> -->
                                    <th width="15%">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- File export table -->
<!-- BEGIN PAGE LEVEL JS-->
<!-- <script src="<?= $this->Url->build('/backend/', ['fullBase' => true]); ?>app-assets/js/data-tables/datatable-advanced.js" type="text/javascript"></script> -->
<!-- END PAGE LEVEL JS-->
<?= $this->element('datatable_options', ["record_name" => 'search keywords', 'specific_id' => "categories_table", "record_count" => count($searchKeywords)]) ?>
<script>
    $(document).ready(function() {

    });
</script>