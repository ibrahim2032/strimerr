 <?php if($this->session->userdata('login')){ ?>
    <section class="hbox stretch" style="padding-top: 10px;">
        <?php $this->load->view('layout/profile_side'); ?>
                                <aside>
                                    <section class="vbox">
                                        <section class="scrollable">
                                            <div class="col-lg-12" style="padding-top: 15px;">
                                                <div class="panel wrapper-md">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h1 class="m-t-none m-b text-black h2">Bio</h1>
                                                            <table style="width:90%;" class="bio_table">
                                                                <tr>
                                                                    <td style="width:40%;" >Name</td>
                                                                    <td><?php  echo $user->user->name; ?></td>
                                                                </tr>
                                                            <?php if(isset($user->user->stage_name)){ ?>
                                                                <tr>
                                                                    <td>A.K.A</td>
                                                                    <td><?php  echo $user->user->stage_name; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->birthday)){ ?>
                                                                <tr>
                                                                    <td>Date of Birth</td>
                                                                    <td><?php  echo $user->user->birthday; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->origin)){ ?>
                                                                <tr>
                                                                    <td>Origin</td>
                                                                    <td><?php  echo $user->user->origin; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->genre)){ ?>
                                                                <tr>
                                                                    <td>Genres</td>
                                                                    <td><?php  echo $user->user->genre; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->occupation)){ ?>
                                                                <tr>
                                                                    <td>Occupation</td>
                                                                    <td><?php  echo $user->user->occupation; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->instrument)){ ?>
                                                                <tr>
                                                                    <td>Instruments</td>
                                                                    <td><?php  echo $user->user->instrument; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->active_time)){ ?>
                                                                <tr>
                                                                    <td>Active Time</td>
                                                                    <td><?php  echo $user->user->active_time; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            <?php if(isset($user->user->company)){ ?>
                                                                <tr>
                                                                    <td>Company</td>
                                                                    <td><?php  echo $user->user->company; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="panel wrapper-md">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h1 class="m-t-none m-b text-black h2">Career</h1>
                                                            <p><?php  echo($user->user->career)? nl2br($user->user->career) : 'Auto-Biography and career not found.'; ?></p>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="panel wrapper-md">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h1 class="m-t-none m-b text-black h2">Nominations/Awards</h1>
                                                            <ul></ul>
                                                            <p>Quis istud possit, inquit, negare? Quid enim tanto opus est instrumento in optimis artibus comparandis? Hosne igitur laudas et hanc eorum, inquam, sententiam sequi nos censes oportere? Quid, de quo nulla dissensio est? Si verbum sequimur, primum longius verbum praepositum quam bonum. Sic enim censent, oportunitatis esse beate vivere. Quae fere omnia appellantur uno ingenii nomine, easque virtutes qui habent, ingeniosi vocantur. Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. An est aliquid, quod te sua sponte delectet? Res enim concurrent contrariae. </p>
                                                            <p>Multoque hoc melius nos veriusque quam Stoici. At miser, si in flagitiosa et vitiosa vita afflueret voluptatibus. Quae cum praeponunt, ut sit aliqua rerum selectio, naturam videntur sequi; Hoc est dicere: Non reprehenderem asotos, si non essent asoti. Beatus sibi videtur esse moriens. Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus; Ipse Epicurus fortasse redderet, ut Sextus Peducaeus, Sex. </p>
                                                            <p>Quos quidem tibi studiose et diligenter tractandos magnopere censeo. Tum ille timide vel potius verecunde: Facio, inquit. Apparet statim, quae sint officia, quae actiones. Velut ego nunc moveor. Perge porro; Primum quid tu dicis breve? Iam contemni non poteris. Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia. Laboro autem non sine causa; Ut proverbia non nulla veriora sint quam vestra dogmata. </p>
                                                            <p>Comprehensum, quod cognitum non habet? Idem etiam dolorem saepe perpetiuntur, ne, si id non faciant, incidant in maiorem. Quia dolori non voluptas contraria est, sed doloris privatio. Scrupulum, inquam, abeunti; Praetereo multos, in bis doctum hominem et suavem, Hieronymum, quem iam cur Peripateticum appellem nescio. Nihil enim iam habes, quod ad corpus referas; </p>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                                                                                                                    
                                            </div>
                                        </section>
                                    </section>
                                </aside>
                            </section>
                        </section>
<?php } ?> 