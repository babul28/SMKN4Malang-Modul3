<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= ucfirst($this->uri->segment(1)) ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <?php
                        //mengulang sebanyak segment yang ada di url
                        foreach ($this->uri->segments as $segment) : ?>
                            <?php
                                //mendapatkan url dengan cara memecah string url sesuai dengan panjang segment yang berkaitan
                                $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                                //mengecek apakah url dengan string url sama atau tidak, jika sama maka segment tersebut adalah halaman yang dibuka
                                $is_active = $this->uri->uri_string == $url;
                                ?>
                            <li class="breadcrumb-item <?php $is_active ? 'active' : '' ?>">
                                <?php if ($is_active) : ?>
                                    <!-- jika is_active == true maka nilai dari variabel segment akan dicetak -->
                                    <?php echo ucfirst($segment) ?>
                                <?php else : ?>
                                    <!-- Jika tidak, maka nilai segment akan dicetak beserta link yang sudah didapatkan -->
                                    <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->