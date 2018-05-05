<style>
    .nav-tabs > li{
        width: 25%;
        text-align: center;
        transition:300ms;
    }
    .nav-tabs > li > a {
        color:#c3f216;
    }
    .nav-tabs > li > a:hover {
        color:#555;
    }
    .tab-pane {
        padding:25px 0 75px 0;
    }
    .results-table{
        
    }
    .results-table .results-table-head{
        color:#e0e0e0;
        padding: 2px 0;
        text-align: center;
        border-bottom: 1px solid #e0e0e0;
    }
    .results-table ul{
        list-style:none;
        padding: 0 0 0.4em;
        border-bottom:1px solid #808080;
    }
    .results-table ul li{
        display:inline-block;
    }
    /* .results-table ul li:hover{
        color:#e0e0e0;
    } */
    ul.results-table.table-entry {
        transition:400ms;
    }
    ul.results-table.table-entry:hover {
        color:#c3f216;
    }
    .results-table .tbl-rank{
        width:5%;
    }
    .results-table .tbl-team{
        width:20%;
    }
    .results-table .tbl-name{
        width:15%;
    }
    .results-table .tbl-rnd{
        width:6.5%;
    }
    .team-container {
        padding:2em 0;
    }
</style>
<div class="row" style="padding-top:150px;">
    <div class="col-sm-10 col-sm-offset-1">
            <h2 class="ksc-grey"><span class="ksc-green"><strong>KINGS</strong> Ski Club</span> <?php the_sub_field('indv_year'); ?> Finals Results</h2>

        <div class="team-results">

            <?php 
                // vars
                $team_1mixed = get_sub_field('team_1mixed');
                $team_2mixed = get_sub_field('team_2mixed');
                $team_3mixed = get_sub_field('team_3mixed');
                $team_1board = get_sub_field('team_1board');
                $team_2board = get_sub_field('team_2board');
                $team_3board = get_sub_field('team_3board');
                $team_1ladies = get_sub_field('team_1ladies');
                $team_2ladies = get_sub_field('team_2ladies');
                $team_3ladies = get_sub_field('team_3ladies');
            ?>
            <div class="row team-container">

                <div class="col-sm-4">
                <h3>Mixed Teams</h3>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">1<sup>st</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_1mixed; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">2<sup>nd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_2mixed; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">3<sup>rd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_3mixed; ?></p></div>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Snowboard Teams</h3>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">1<sup>st</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_1board; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">2<sup>nd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_2board; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">3<sup>rd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_3board; ?></p></div>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Ladies Teams</h3>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">1<sup>st</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_1ladies; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">2<sup>nd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_2ladies; ?></p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><p class="lead">3<sup>rd</sup></p></div>
                    <div class="col-xs-9"><p class="lead"><?php echo $team_3ladies; ?></p></div>
                </div>
            </div>

            </div>
            

        </div>
        <hr>
        <div>
            <h3 style="padding:1em 0 1em">Individual Results</h3>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#lboard" aria-controls="lboard" role="tab" data-toggle="tab">Ladies Snowboarding</a></li>
                <li role="presentation"><a href="#lski" aria-controls="lski" role="tab" data-toggle="tab">Ladies Skiing</a></li>
                <li role="presentation"><a href="#mboard" aria-controls="mboard" role="tab" data-toggle="tab">Mens Snowboarding</a></li>
                <li role="presentation"><a href="#mski" aria-controls="mski" role="tab" data-toggle="tab">Mens Skiing</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="lboard">
                    <div class="row">
            
                        <div class="" dir="" style="text-align:center;">
                            <div class="results-table">
                                <ul class="results-table-head">
                                    <li class="tbl-rank">Rank</li>
                                    <li class="tbl-rnd">Bib #</li>
                                    <li class="tbl-team">Team</li>
                                    <li class="tbl-name">Name</li>
                                    <li class="tbl-name">Surname</li>
                                    <li class="tbl-rnd">Gender</li>
                                    <li class="tbl-rnd">Run 1</li>
                                    <li class="tbl-rnd">Run 2</li>
                                    <li class="tbl-rnd">Combined</li>
                                </ul>
                                <?php if( have_rows('indv_lboard') ): $counter = 0; ?>
                                    <?php while( have_rows('indv_lboard') ): the_row(); $counter++;
                                        // vars
                                        $lboard_bib = get_sub_field('indv_lboard_bib');
                                        $lboard_team = get_sub_field('indv_lboard_team');
                                        $lboard_name = get_sub_field('indv_lboard_name');
                                        $lboard_sname = get_sub_field('indv_lboard_sname');
                                        $lboard_run1 = get_sub_field('indv_lboard_run1');
                                        $lboard_run2 = get_sub_field('indv_lboard_run2');
                                        $lboard_comb = get_sub_field('indv_lboard_comb');
                                    ?>
                                        <!-- Entry -->
                                        <ul class="results-table table-entry wow fadeIn">
                                            <li class="tbl-rank"><?php echo $counter; ?></li>
                                            <li class="tbl-rnd"><?php echo $lboard_bib; ?></li>
                                            <li class="tbl-team"><?php echo $lboard_team; ?></li>
                                            <li class="tbl-name"><?php echo $lboard_name; ?></li>
                                            <li class="tbl-name"><?php echo $lboard_sname; ?></li>
                                            <li class="tbl-rnd">F</li>
                                            <li class="tbl-rnd"><?php echo $lboard_run1 ?></li>
                                            <li class="tbl-rnd"><?php echo $lboard_run2 ?></li>
                                            <li class="tbl-rnd"><?php echo $lboard_comb ?></li>
                                        </ul>
                                        <!-- End: Entry -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <a class="btn btn-kings" style="margin:2em 0 0" href="<?php the_sub_field('indv_lboard_dload'); ?>" target="_blank">Download Ladies Snowboard Results</a>
                        </div>
                    
                    </div><!-- End: Row -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="lski">
                    <div class="row">
                        
                        <div class="" dir="" style="text-align:center;">
                            <div class="results-table">
                                <ul class="results-table-head">
                                    <li class="tbl-rank">Rank</li>
                                    <li class="tbl-rnd">Bib #</li>
                                    <li class="tbl-team">Team</li>
                                    <li class="tbl-name">Name</li>
                                    <li class="tbl-name">Surname</li>
                                    <li class="tbl-rnd">Gender</li>
                                    <li class="tbl-rnd">Run 1</li>
                                    <li class="tbl-rnd">Run 2</li>
                                    <li class="tbl-rnd">Combined</li>
                                </ul>
                                <?php if( have_rows('indv_lski') ): $counter = 0; ?>
                                    <?php while( have_rows('indv_lski') ): the_row(); $counter++;
                                        // vars
                                        $lski_bib = get_sub_field('indv_lski_bib');
                                        $lski_team = get_sub_field('indv_lski_team');
                                        $lski_name = get_sub_field('indv_lski_name');
                                        $lski_sname = get_sub_field('indv_lski_sname');
                                        $lski_run1 = get_sub_field('indv_lski_run1');
                                        $lski_run2 = get_sub_field('indv_lski_run2');
                                        $lski_comb = get_sub_field('indv_lski_comb');
                                    ?>
                                        <!-- Entry -->
                                        <ul class="results-table table-entry wow fadeIn">
                                            <li class="tbl-rank"><?php echo $counter; ?></li>
                                            <li class="tbl-rnd"><?php echo $lski_bib; ?></li>
                                            <li class="tbl-team"><?php echo $lski_team; ?></li>
                                            <li class="tbl-name"><?php echo $lski_name; ?></li>
                                            <li class="tbl-name"><?php echo $lski_sname; ?></li>
                                            <li class="tbl-rnd">F</li>
                                            <li class="tbl-rnd"><?php echo $lski_run1 ?></li>
                                            <li class="tbl-rnd"><?php echo $lski_run2 ?></li>
                                            <li class="tbl-rnd"><?php echo $lski_comb ?></li>
                                        </ul>
                                        <!-- End: Entry -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <a class="btn btn-kings" style="margin:2em 0 0" href="<?php the_sub_field('indv_mboard_dload'); ?>" target="_blank">Download Ladies Skiing Results</a>
                        </div>
                    </div>
                    
                </div>
                <div role="tabpanel" class="tab-pane fade" id="mboard">
                    <div class="row">
                        
                        <div class="" dir="" style="text-align:center;">
                            <div class="results-table">
                                <ul class="results-table-head">
                                    <li class="tbl-rank">Rank</li>
                                    <li class="tbl-rnd">Bib #</li>
                                    <li class="tbl-team">Team</li>
                                    <li class="tbl-name">Name</li>
                                    <li class="tbl-name">Surname</li>
                                    <li class="tbl-rnd">Gender</li>
                                    <li class="tbl-rnd">Run 1</li>
                                    <li class="tbl-rnd">Run 2</li>
                                    <li class="tbl-rnd">Combined</li>
                                </ul>
                                <?php if( have_rows('indv_mboard') ): $counter = 0; ?>
                                    <?php while( have_rows('indv_mboard') ): the_row(); $counter++;
                                        // vars
                                        $mboard_bib = get_sub_field('indv_mboard_bib');
                                        $mboard_team = get_sub_field('indv_mboard_team');
                                        $mboard_name = get_sub_field('indv_mboard_name');
                                        $mboard_sname = get_sub_field('indv_mboard_sname');
                                        $mboard_run1 = get_sub_field('indv_mboard_run1');
                                        $mboard_run2 = get_sub_field('indv_mboard_run2');
                                        $mboard_comb = get_sub_field('indv_mboard_comb');
                                    ?>
                                        <!-- Entry -->
                                        <ul class="results-table table-entry wow fadeIn">
                                            <li class="tbl-rank"><?php echo $counter; ?></li>
                                            <li class="tbl-rnd"><?php echo $mboard_bib; ?></li>
                                            <li class="tbl-team"><?php echo $mboard_team; ?></li>
                                            <li class="tbl-name"><?php echo $mboard_name; ?></li>
                                            <li class="tbl-name"><?php echo $mboard_sname; ?></li>
                                            <li class="tbl-rnd">M</li>
                                            <li class="tbl-rnd"><?php echo $mboard_run1 ?></li>
                                            <li class="tbl-rnd"><?php echo $mboard_run2 ?></li>
                                            <li class="tbl-rnd"><?php echo $mboard_comb ?></li>
                                        </ul>
                                        <!-- End: Entry -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <a class="btn btn-kings" style="margin:2em 0 0" href="<?php the_sub_field('indv_lski_dload'); ?>" target="_blank">Download Mens Snowboard Results</a>
                        </div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="mski">
                    <div class="row">
                        
                        <div class="" dir="" style="text-align:center;">
                            <div class="results-table">
                                <ul class="results-table-head">
                                    <li class="tbl-rank">Rank</li>
                                    <li class="tbl-rnd">Bib #</li>
                                    <li class="tbl-team">Team</li>
                                    <li class="tbl-name">Name</li>
                                    <li class="tbl-name">Surname</li>
                                    <li class="tbl-rnd">Gender</li>
                                    <li class="tbl-rnd">Run 1</li>
                                    <li class="tbl-rnd">Run 2</li>
                                    <li class="tbl-rnd">Combined</li>
                                </ul>
                                <?php if( have_rows('indv_mski') ): $counter = 0; ?>
                                    <?php while( have_rows('indv_mski') ): the_row(); $counter++;
                                        // vars
                                        $mski_bib = get_sub_field('indv_mski_bib');
                                        $mski_team = get_sub_field('indv_mski_team');
                                        $mski_name = get_sub_field('indv_mski_name');
                                        $mski_sname = get_sub_field('indv_mski_sname');
                                        $mski_run1 = get_sub_field('indv_mski_run1');
                                        $mski_run2 = get_sub_field('indv_mski_run2');
                                        $mski_comb = get_sub_field('indv_mski_comb');
                                    ?>
                                        <!-- Entry -->
                                        <ul class="results-table table-entry wow fadeIn">
                                            <li class="tbl-rank"><?php echo $counter; ?></li>
                                            <li class="tbl-rnd"><?php echo $mski_bib; ?></li>
                                            <li class="tbl-team"><?php echo $mski_team; ?></li>
                                            <li class="tbl-name"><?php echo $mski_name; ?></li>
                                            <li class="tbl-name"><?php echo $mski_sname; ?></li>
                                            <li class="tbl-rnd">M</li>
                                            <li class="tbl-rnd"><?php echo $mski_run1 ?></li>
                                            <li class="tbl-rnd"><?php echo $mski_run2 ?></li>
                                            <li class="tbl-rnd"><?php echo $mski_comb ?></li>
                                        </ul>
                                        <!-- End: Entry -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <a class="btn btn-kings" style="margin:2em 0 0" href="<?php the_sub_field('indv_mski_dload'); ?>" target="_blank">Download Mens Ski Results</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>