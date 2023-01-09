<?php require("config.php"); if ($logged_in_admin) { if (isset($_POST["modifyingContents"])) {$id = secure($_POST["modifyingContents"]); $page = getOnlyPageName($_SERVER["HTTP_REFERER"]);if (!empty($_POST["title"])) $title = secure($_POST["title"]);else {echo "Title is missing";exit();}if (!empty($_POST["content"])) $content = secure($_POST["content"],true);else {echo "Content is missing";exit();}if (secure($_POST["modifyingContents"]) > 0) {$sql = "UPDATE `contents` SET `title`='$title',`content`='$content' WHERE `id` = $id"; $result= runQuery($sql); $msg = "updated";} else { $sql = "INSERT INTO `contents` (`title`,`content`) VALUES ('$title','$content')";$result= runQuery($sql);$contents_id = $mysqli->insert_id; if ($page == "contents-view") $msg = $contents_id; else $msg = "created";} if ($result) {echo $msg;}else echo str_replace("for key", "column ", $mysqli->error);exit();} elseif (isset($_POST["detailsOf"]) && secure($_POST["detailsOf"]) == "contents") {$searchTitle = secure($_POST['searchTitle']);$searchCreatedOn = secure($_POST['searchCreatedOn']);$searchTitle = !empty($searchTitle) ? "AND title LIKE '%$searchTitle%'" : '';if (!empty($searchCreatedOn)) {$searchCreatedOn = explode('to', $searchCreatedOn);$searchCreatedOnEnd = date('Y-m-d h:i:s a', strtotime($searchCreatedOn[1]));$searchCreatedOnStart = date('Y-m-d h:i:s a', strtotime($searchCreatedOn[0]));$searchCreatedOn = "AND createdOn BETWEEN '$searchCreatedOnStart' AND '$searchCreatedOnEnd'";} else $searchCreatedOnStart = '';$search_params ="$searchTitle $searchCreatedOn";$fetchQuery = "SELECT `contents`.* FROM `contents` WHERE `contents`.`isDeleted` = 0 $search_params";$data = array();$count = 0;$start = secure($_POST["start"]);$length = secure($_POST["length"]);$draw = secure($_POST["draw"]);$count_sql = "SELECT COUNT(`contents`.`id`) AS `total_count` FROM `contents` WHERE `contents`.`isDeleted` = 0 $search_params";$totalCount = runQuery($count_sql)->fetch_assoc()["total_count"];$sql = "$fetchQuery ORDER BY `contents`.`id` LIMIT $start,$length";$result = runQuery($sql);while ($row = $result->fetch_object()) {$modifiers = "data-title='$row->title'data-content='$row->content' data-id='$row->id' ";$view='<a class="p-1 mx-1 text-success" href="contents-view?contents_id='.$row->id.'"><i class="far fa-file-alt"></i> View</a>';$edit='<a data-modaltitle="Edit" '.$modifiers.' class="p-1 mx-1 text-primary editContents"><i class="fas fa-edit"></i> Edit</a>';$delete ='<a data-toggle="modal" data-target="#deleteContents" data-id="'.$row->id.'" class="p-1 mx-1 text-danger deleteContents"><i class="fas fa-trash-alt"></i> Delete </a>';$actions="$view$edit$delete";array_push($data, array('Title ' => $row->title,'Created On' => formatDateTime($row->createdOn),"Sr #" => '<span class="btn-collection p-2 mt-n2">'.$actions.'</span>' . (++$count + $start),));} $results = array("draw" => $draw, "recordsTotal" => $totalCount, "recordsFiltered" => $totalCount, "aaData" => $data);echo json_encode($results);} elseif (isset($_POST["contents_id"])) {$data = array();$id = secure($_POST["contents_id"]);$contents = runQuery("SELECT `contents`.* FROM `contents` WHERE `contents`. `isDeleted` = 0 AND `contents`.`id` = $id")->fetch_object();if (is_null($contents)) {echo "false";}else{$row=$contents;$modifiers = "data-title='$row->title'data-content='$row->content' data-id='$row->id'"; $edit="<a data-modaltitle='Edit' $modifiers class='btn btn-primary text-white editContents'><i class='fas fa-edit'></i> Edit</a>";$delete="<a data-toggle='modal' data-target='#deleteContents' data-id='$contents->id' class='btn btn-danger text-white deleteContents'><i class='fas fa-trash-alt'></i> Delete </a>";if ($row->isDeleted == 0) $actions = "$edit$delete"; $data = array('TITLE_' => $row->title,'CONTENT_' => $row->content,'CREATED_ON' => formatDateTime($row->createdOn), "Actions" => "$actions");echo json_encode($data);}} elseif (isset($_POST["deleteContents"])) {$id = secure($_POST["contentsDeleteId"]);if (is_numeric($id)) {$sql = "UPDATE `contents` SET `isDeleted` =1 WHERE `id`=$id AND `isDeleted` = 0";if (runQuery($sql)) echo "true";} else echo "false";exit();} } else echo '403 Forbidden Access';