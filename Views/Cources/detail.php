<?php
    include('../Components/Header.php');
    include('../../Model/database.php');
    $id = @$_GET['id'];;
    $sql = "SELECT * FROM cources WHERE id =? LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $item = $stmt->fetch();
?>
<div class="center">
    <div class="row">
        <div class="col-8">
            <h1 class="cource-head"><?php echo $item["cource_name"] ?></h1>
            <p class="cource-descript"><?php echo $item["description"] ?></p>
            <div class="cource-result">
                <h2 class="cource-title">Bạn sẽ học được gì?</h2>
                <ul class="cource-result__list">
                    <li class="cource-result__item">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        <span class="cource-result__text">Các kiến thức cơ bản, nền móng của ngành IT</span>
                    </li>
                    <li class="cource-result__item">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        <span class="cource-result__text">Các kiến thức cơ bản, nền móng của ngành IT</span>
                    </li>
                    <li class="cource-result__item">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        <span class="cource-result__text">Các kiến thức cơ bản, nền móng của ngành IT</span>
                    </li>
                    <li class="cource-result__item">
                        <ion-icon name="checkmark-outline"></ion-icon>
                        <span class="cource-result__text">Các kiến thức cơ bản, nền móng của ngành IT</span>
                    </li>
                </ul>
            </div>
            <div class="cource-content">
                <h2 class="cource-title">Nội dung khóa học</h2>
                <ul class="cource-content__list">
                    <li class="cource-content__item">Khái niệm kỹ thuật cần biết.</li>
                    <li class="cource-content__item">Khái niệm kỹ thuật cần biết.</li>
                    <li class="cource-content__item">Khái niệm kỹ thuật cần biết.</li>
                    <li class="cource-content__item">Khái niệm kỹ thuật cần biết.</li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <?php echo $item["video"] ?>
            <div class="cource-info">
                <h3 class="cource-info__fee">Miễn phí</h3>
                <a href="#" class="cource-info__btn btn btn-primary">Đăng ký ngay</a>
                <ul class="cource-info__list">
                    <li class="cource-info__item">
                        <ion-icon name="speedometer-outline"></ion-icon>
                        <span class="cource-info__text"><?php echo $item["level"] ?></span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span class="cource-info__text">Tổng số <?php echo $item["lession_count"] ?> bài học</span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="hourglass-outline"></ion-icon>
                        <span class="cource-info__text">Thời lượng <?php echo $item["total_time"] ?></span>
                    </li>
                    <li class="cource-info__item">
                        <ion-icon name="battery-charging-outline"></ion-icon>
                        <span class="cource-info__text"><?php echo $item["access"] ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('../Components/Footer.php') ?>