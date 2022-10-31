<?php $pager->setSurroundCount(1) ?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?> ">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>

    <style>
        .pagination {
            height: 36px;
            margin: 18px 0;
            color: #800000;
        }

        .pagination ul {
            display: inline-block;
            *display: inline;
            /* IE7 inline-block hack */
            *zoom: 1;
            margin-left: 0;
            color: #ffffff;
            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .pagination li {
            display: inline;
            color: #800000;
        }

        .pagination a {
            float: left;
            padding: 0 14px;
            line-height: 34px;
            color: #800000;
            text-decoration: none;
            border: 1px solid #ddd;
            border-left-width: 0;
        }

        .pagination a:hover,
        .pagination .active a {
            background-color: #800000;
            color: #ffffff;
        }

        .pagination a:focus {
            background-color: #800000;
            color: #ffffff;
        }


        .pagination .active a {
            color: #ffffff;
            cursor: default;
        }

        .pagination .disabled span,
        .pagination .disabled a,
        .pagination .disabled a:hover {
            color: #999999;
            background-color: transparent;
            cursor: default;
        }

        .pagination li:first-child a {
            border-left-width: 1px;
            -webkit-border-radius: 3px 0 0 3px;
            -moz-border-radius: 3px 0 0 3px;
            border-radius: 3px 0 0 3px;
        }

        .pagination li:last-child a {
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
        }

        .pagination-centered {
            text-align: center;
        }

        .pagination-right {
            text-align: right;
        }

        .pager {
            margin-left: 0;
            margin-bottom: 18px;
            list-style: none;
            text-align: center;
            color: #6c58bF;
            *zoom: 1;
        }

        .pager:before,
        .pager:after {
            display: table;
            content: "";
        }

        .pager:after {
            clear: both;
        }

        .pager li {
            display: inline;
            color: #6c58bF;
        }

        .pager a {
            display: inline-block;
            padding: 5px 14px;
            color: #800000;
            background-color: #fff;
            border: 1px solid #ddd;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 15px;
        }

        .pager .next a {
            float: right;
        }

        .pager .previous a {
            float: left;
        }

        .pager .disabled a,
        .pager .disabled a:hover {
            color: #999999;
        }

        .pagination>li>a {
            background-color: white;
            color: #800000;
        }

        .pagination>.active>a {
            color: white;
            background-color: #800000 !Important;
            border: solid 1px #800000 !Important;
        }

        .pagination>.active>a:hover {
            background-color: #800000 !Important;
            border: solid 1px #800000;
        }
    </style>
</nav>