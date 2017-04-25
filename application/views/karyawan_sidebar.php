  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php $a=$this->uri->segment(1); if($a=='karyawan_barang'){echo "active";}?> treeview">
          <a href="<?php echo base_url('karyawan_barang/barang');?>">
            <i class="fa fa-leaf text-yellow"></i> <span>Data Barang</span>
          </a> 
        </li>
          
        <li class="<?php $a=$this->uri->segment(1); if($a=='karyawan_order'){echo "active";}?> treeview">
          <a href="<?php echo base_url('karyawan_order');?>">
            <i class="fa  fa-shopping-bag text-red"></i>
            <span>Order</span>
          </a>
        </li>
          
        <li  class="<?php if($a=='karyawan_pet'){echo "active";}?> treeview">
          <a href="<?php echo base_url('karyawan_pet');?>">
            <i class="fa fa-paw text-aqua"></i>
            <span>Pet</span>
          </a>
        </li>
          
        <li class="<?php if($a=='karyawan_jb'){echo "active";}?> treeview">
          <a href="<?php echo base_url('karyawan_jb');?>">
            <i class="fa fa-pagelines text-green"></i>
            <span>Jenis Barang</span>
          </a>
        </li>
        
        <li class="<?php if($a=='karyawan_toko'){echo "active";}?> treeview">
          <a href="<?php echo base_url('karyawan_toko');?>">
            <i class="fa  fa-building text-aqua"></i>
            <span>Toko</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>