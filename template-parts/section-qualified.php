<div class="row" style="padding-top:50px;">
    <div class="col-sm-10 col-sm-offset-1">
            <h2 style="margin-bottom:2em;">Qualified Teams</h2>
        <div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#ski" aria-controls="ski" role="tab" data-toggle="tab">Mixed</a></li>
                <li role="presentation"><a href="#board" aria-controls="board" role="tab" data-toggle="tab">Boarders</a></li>
                <li role="presentation"><a href="#ladies" aria-controls="ladies" role="tab" data-toggle="tab">Ladies</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="ski">
                    <div class="row">
            
                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_ski1') ): ?>
                                <?php while( have_rows( 'qualified_ski1' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'one_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-3" style="text-align:center">
                        <?php if( have_rows('qualified_ski2') ): ?>
                            <?php while( have_rows( 'qualified_ski2' ) ): the_row(); ?>
                                
                                <p><?php the_sub_field( 'two_team' ); ?></p>

                            <?php endwhile; ?>
                        <?php endif; ?> 
                        </div>
                        <div class="col-sm-3" style="text-align:center">
                        <?php if( have_rows('qualified_ski3') ): ?>
                            <?php while( have_rows( 'qualified_ski3' ) ): the_row(); ?>
                                
                                <p><?php the_sub_field( 'three_team' ); ?></p>

                            <?php endwhile; ?>
                        <?php endif; ?> 
                        </div>
                        <div class="col-sm-3" style="text-align:center">
                        <?php if( have_rows('qualified_ski4') ): ?>
                            <?php while( have_rows( 'qualified_ski4' ) ): the_row(); ?>
                                
                                <p><?php the_sub_field( 'four_team' ); ?></p>

                            <?php endwhile; ?>
                        <?php endif; ?> 
                        </div>
                    
                    </div><!-- End: Row -->

                </div>
                <div role="tabpanel" class="tab-pane fade" id="board">
                    <div class="row">

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_board1') ): ?>
                                <?php while( have_rows( 'qualified_board1' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'one_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_board2') ): ?>
                                <?php while( have_rows( 'qualified_board2' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'two_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_board3') ): ?>
                                <?php while( have_rows( 'qualified_board3' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'three_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_board4') ): ?>
                                <?php while( have_rows( 'qualified_board4' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'four_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                    
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ladies">
                    <div class="row">
                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_ladies1') ): ?>
                                <?php while( have_rows( 'qualified_ladies1' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'one_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_ladies2') ): ?>
                                <?php while( have_rows( 'qualified_ladies2' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'two_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_ladies3') ): ?>
                                <?php while( have_rows( 'qualified_ladies3' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'three_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-sm-3" style="text-align:center">
                            <?php if( have_rows('qualified_ladies4') ): ?>
                                <?php while( have_rows( 'qualified_ladies4' ) ): the_row(); ?>
                                    
                                    <p><?php the_sub_field( 'four_team' ); ?></p>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    
    </div>
</div>