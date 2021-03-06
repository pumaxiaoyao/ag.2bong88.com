<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title><strong><span class="bl_stype">Bóng đá</span></strong> - <?php echo $bet->lblLeaguename ?></title>
    <link href="/assets/stylesheets/agent/Agent.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/Reports.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/BetList.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/fanex.result.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/fanex.result-customized.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/DateRangeSelect.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/jscal2.css?06" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/agent/steel.css?06" rel="stylesheet" type="text/css" />
</head>

<body>
    <form id="frmmain" method="get">
        <div id="page_main">
            <!--ResultTitle-->
            <!--/ResultTitle-->
            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <!--HeaderRegion-->
                <!--/HeaderRegion-->
                <!--SportCriteria-->
                <!--/SportCriteria-->
                <tr>
                    <td>
                        <div id="tbl-container">
                            <div id="boderRight">
                                <!--ExcelContents-->
                                <table class="fn-rs popup">
                                    <thead>
                                        <tr class="header">
                                            <th class="cl-ko-time">Thời gian cập nhật</th>
                                            <th class="cl-match">Trận đấu</th>
                                            <th class="cl-ht-score">Tỷ số hiệp 1</th>
                                            <th class="cl-f-score">Tỷ số chung cuộc</th>
                                            <th class="cl-status">Trạng th&#225;i</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 

										$dataScoreFinal = explode("-",$bet->fullScore);
										if(count($dataScoreFinal)<2)
											$dataScoreFinal = array("-","-");
										
										$dataScoreHaft = explode("-",$bet->haftScore);
										if(count($dataScoreHaft)<2)
											$dataScoreHaft = array("-","-");

									?>
                                        <tr class="data odd">
                                            <td class="cl-ko-time" rowspan="2"><?php echo date("d/m/Y",$bet->timeUpdate) ?>
                                                <br/><?php echo date("H:i:s",$bet->timeUpdate) ?></td>
                                            <td class="cl-match home "><?php echo $bet->lblHome ?> &nbsp;</td>
                                            <td class="cl-ht-score"><?php echo $dataScoreHaft[0] ?></td>
                                            <td class="cl-f-score"><?php echo $dataScoreFinal[0] ?></td>
                                            <td rowspan="2" class="cl-status ">
                                                <div>Kết th&#250;c</div>
                                            </td>
                                        </tr>
                                        <tr class="data odd">
                                            <td class="cl-match away "><?php echo $bet->lblAway ?> &nbsp;</td>
                                            <td class="cl-ht-score"><?php echo $dataScoreHaft[1] ?></td>
                                            <td class="cl-f-score"><?php echo $dataScoreFinal[1] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--/ExcelContents-->
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <input type="hidden" id="isOutright" name="isOutright" value="False" />
        <input id="RootURL" name="RootURL" type="hidden" value="/" />
    </form>
    <script src="/assets/js/bet/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="/assets/js/bet/moment.js" type="text/javascript"></script>
    <script src="/assets/js/bet/jscal2.js?06" type="text/javascript"></script>
    <script src="/assets/js/bet/en.js?06" type="text/javascript"></script>

    <script src="/assets/js/bet/Core.js" type="text/javascript"></script>
    <script src="/assets/js/bet/AGEWnd.js" type="text/javascript"></script>
</body>

</html>