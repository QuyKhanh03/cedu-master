
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">danh sách đăng kí khóa học của tôi</h5>
<!--                            <form method="POST">-->
<!--                                <div style="text-align: center" >-->
<!--                                    <select class="select2 form-control custom-select" id="select-group" style="width: 30%; height:36px;" name="ma_khoa_hoc">-->
<!--                                        <option value="">Chọn</option>-->
<!--                                        --><?php
//                                        $m_category = new M_category();
//                                        $category = $m_category->Read_category();
//                                        $m_couse = new M_couse();
//                                        foreach ($category as $ct)
//                                        {
//                                            ?>
<!--                                            <optgroup label="--><?php //echo $ct->ten_loai; ?><!--">-->
<!--                                                --><?php
//                                                $couse = $m_couse->read_couse_by_category($ct->ma_loai);
//                                                foreach ($couse as $cs)
//                                                {
//                                                    ?>
<!--                                                    <option  value="--><?php //echo $cs->ma_khoa_hoc?><!--">--><?php
//                                                        echo $cs->ten_khoa_hoc;
//                                                        ?><!--</option>-->
<!--                                                    --><?php
//                                                }
//                                                ?>
<!--                                            </optgroup>-->
<!---->
<!--                                            --><?php
//                                        }
//                                        ?>
<!--                                    </select>-->
<!--                                    <button type="submit" class="btn btn-success" style="height: 2.4em;"  name="btnTimKiem" >Lọc</button>-->
<!--                                </div>-->
<!--                            </form>-->
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tên lớp</th>
                                        <th>Ca học</th>
                                        <th>Ngày khai giảng</th>
                                        <th>Khóa học</th>
                                        <th>Địa điểm học</th>
                                        <th>Giá tiền</th>
                                        <th>Ngày đăng kí</th>
                                        <th>Tình trạng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($couses_o as $od) {
                                        ?>
                                        <tr>
                                            <td><?php echo $od->ten_lop ?></td>
                                            <td><?php echo $od->ca_hoc;?></td>
                                            <td><?php echo date("d-m-Y", strtotime($od->thoi_gian_khai_giang));?></td>
                                            <td><?php echo $od->ten_khoa_hoc;?></td>
                                            <td><?php echo $od->dia_diem_hoc;?></td>
                                            <td><?php echo number_format($od->gia_tien);?> <VND></VND></td>
                                            <td><?php echo date("d-m-Y", strtotime($od->ngay_dk));?></td>
                                            <td><span style="margin-right: 15%;"
                                                      class="badge badge-pill badge-<?php if($od->tinh_trang==0)
                                                      {
                                                          echo "danger";
                                                      }
                                                      else
                                                      {
                                                          echo "info";
                                                      }

                                                      ?>
                            float-right"><?php if($od->tinh_trang==0)
                                                    {
                                                        echo "chưa thanh toán";
                                                    }
                                                    else
                                                    {
                                                        echo "đã thanh toán";
                                                    }?></span>
                                            </td>


                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    <input id="id-course" type="hidden" value="<?php echo $idCourse?>" />
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>

<script>
    $(document).ready(function() {
        const idCourse = $("#id-course").val();
        if(idCourse !== "") {
            $("#select-group").val(idCourse).change();
        }
    })
</script>