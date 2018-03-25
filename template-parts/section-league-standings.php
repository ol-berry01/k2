<style>
    .nav-tabs > li{
        width: 33%;
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
    .league-table{
        
    }
    .league-table .league-table-head{
        font-size:1.1em;
        font-weight:600;
    }
    .league-table ul{
        list-style:none;
        padding: 0 0 0.4em;
        border-bottom:1px solid #808080;
    }
    .league-table ul li{
        display:inline-block;
    }
    .league-table .tbl-pos{
        width:5%;
    }
    .league-table .tbl-team{
        width:30%;
    }
    .league-table .tbl-rnd{
        width:10%;
    }
</style>

<div id="about-section" class="about-section wow fadeInUp" style="margin-top:3em;padding-top:3em;">
                
    <h2 style="margin-bottom:50px;text-align:center;color:#c3f216;">League<span style="color:#c6c6c6;"> Standings</span></h2>
    
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#mixed" aria-controls="mixed" role="tab" data-toggle="tab">Mixed Skiing</a></li>
            <li role="presentation"><a href="#snowboarding" aria-controls="snowboarding" role="tab" data-toggle="tab">Snowboarding</a></li>
            <li role="presentation"><a href="#ladies" aria-controls="ladies" role="tab" data-toggle="tab">Ladies Skiing</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="mixed">
                
                <div class="" dir="" style="text-align:center;">
                    <div class="league-table">
                        <ul class="league-table-head">
                            <li class="tbl-pos">Position</li>
                            <li class="tbl-team">Team</li>
                            <li class="tbl-rnd">Round 1</li>
                            <li class="tbl-rnd">Round 2</li>
                            <li class="tbl-rnd">Round 3</li>
                            <li class="tbl-rnd">Round 4</li>
                            <li class="tbl-rnd">Total</li>
                        </ul>
                        <?php if( have_rows('league_mixed') ): $counter = 0; ?>
                            <?php while( have_rows('league_mixed') ): the_row(); $counter++;
                                // vars
                                $team = get_sub_field('league_mixed_team');
                                $round1 = get_sub_field('league_mixed_r1');
                                $round2 = get_sub_field('league_mixed_r2');
                                $round3 = get_sub_field('league_mixed_r3');
                                $round4 = get_sub_field('league_mixed_r4');
                                $total = get_sub_field('league_mixed_total');

                            ?>
                                <!-- Entry -->
                                <ul class="league-table table-entry">
                                    <li class="tbl-pos"><?php echo $counter; ?></li>
                                    <li class="tbl-team"><?php echo $team; ?></li>
                                    <li class="tbl-rnd"><?php echo $round1; ?></li>
                                    <li class="tbl-rnd"><?php echo $round2; ?></li>
                                    <li class="tbl-rnd"><?php echo $round3; ?></li>
                                    <li class="tbl-rnd"><?php echo $round4; ?></li>
                                    <li class="tbl-rnd"><?php echo $total; ?></li>
                                </ul>
                                <!-- End: Entry -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <!-- End: Mixed -->
            <!-- Snowboarding -->
            <div role="tabpanel" class="tab-pane fade" id="snowboarding">
                <div class="" dir="" style="text-align:center;">
                    <div class="league-table">
                        <ul class="league-table-head">
                            <li class="tbl-pos">Position</li>
                            <li class="tbl-team">Team</li>
                            <li class="tbl-rnd">Round 1</li>
                            <li class="tbl-rnd">Round 2</li>
                            <li class="tbl-rnd">Round 3</li>
                            <li class="tbl-rnd">Round 4</li>
                            <li class="tbl-rnd">Total</li>
                        </ul>
                        <?php if( have_rows('league_snowboard') ): $counter = 0; ?>
                            <?php while( have_rows('league_snowboard') ): the_row(); $counter++;
                                // vars
                                $team = get_sub_field('league_snowboard_team');
                                $round1 = get_sub_field('league_snowboard_r1');
                                $round2 = get_sub_field('league_snowboard_r2');
                                $round3 = get_sub_field('league_snowboard_r3');
                                $round4 = get_sub_field('league_snowboard_r4');
                                $total = get_sub_field('league_snowboard_total');
                            ?>
                                <!-- Entry -->
                                <ul class="league-table table-entry">
                                    <li class="tbl-pos"><?php echo $counter; ?></li>
                                    <li class="tbl-team"><?php echo $team; ?></li>
                                    <li class="tbl-rnd"><?php echo $round1; ?></li>
                                    <li class="tbl-rnd"><?php echo $round2; ?></li>
                                    <li class="tbl-rnd"><?php echo $round3; ?></li>
                                    <li class="tbl-rnd"><?php echo $round4; ?></li>
                                    <li class="tbl-rnd"><?php echo $total; ?></li>
                                </ul>
                                <!-- End: Entry -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- End: Snowboarding -->

            <!-- Ladies -->
            <div role="tabpanel" class="tab-pane fade" id="ladies">
                <div class="" dir="" style="text-align:center;">
                    <div class="league-table">
                        <ul class="league-table-head">
                            <li class="tbl-pos">Position</li>
                            <li class="tbl-team">Team</li>
                            <li class="tbl-rnd">Round 1</li>
                            <li class="tbl-rnd">Round 2</li>
                            <li class="tbl-rnd">Round 3</li>
                            <li class="tbl-rnd">Round 4</li>
                            <li class="tbl-rnd">Total</li>
                        </ul>
                        <?php if( have_rows('league_ladies') ): $counter = 0; ?>
                            <?php while( have_rows('league_ladies') ): the_row(); $counter++;
                                // vars
                                $team = get_sub_field('league_ladies_team');
                                $round1 = get_sub_field('league_ladies_r1');
                                $round2 = get_sub_field('league_ladies_r2');
                                $round3 = get_sub_field('league_ladies_r3');
                                $round4 = get_sub_field('league_ladies_r4');
                                $total = get_sub_field('league_ladies_total');
                            ?>
                                <!-- Entry -->
                                <ul class="league-table table-entry">
                                    <li class="tbl-pos"><?php echo $counter; ?></li>
                                    <li class="tbl-team"><?php echo $team; ?></li>
                                    <li class="tbl-rnd"><?php echo $round1; ?></li>
                                    <li class="tbl-rnd"><?php echo $round2; ?></li>
                                    <li class="tbl-rnd"><?php echo $round3; ?></li>
                                    <li class="tbl-rnd"><?php echo $round4; ?></li>
                                    <li class="tbl-rnd"><?php echo $total; ?></li>
                                </ul>
                                <!-- End: Entry -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- End: Ladies -->
        </div>
    </div>
</div><!-- End: About Section -->