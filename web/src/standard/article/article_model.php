<?php 


// create article
function create_new_article($articleData) {
  $db = dbConnect();
  $sql = 'INSERT INTO article (articleTitle, articleSummary, articleBody, articleStatus, userId) VALUES (:articleTitle, :articleSummary, :articleBody, :articleStatus, :userId)';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleTitle',   $articleData['articleTitle'],   PDO::PARAM_STR);
  $stmt->bindValue(':articleSummary', $articleData['articleSummary'], PDO::PARAM_STR);
  $stmt->bindValue(':articleBody',    $articleData['articleBody'],    PDO::PARAM_STR);
  $stmt->bindValue(':articleStatus',  $articleData['articleStatus'],  PDO::PARAM_STR);
  // $stmt->bindValue(':articleImagePath',    $articleData['articleImage'],    PDO::PARAM_STR);
  $stmt->bindValue(':userId',         $articleData['userId'],         PDO::PARAM_INT);
  $stmt->execute();
  $rowsChanged = $stmt->rowCount();
  $stmt->closeCursor();
  return $rowsChanged;
}
// update article
// - add like
// - add share

function update_article($articleData) {
  $db = dbConnect();
  $sql = 'UPDATE article SET articleTitle = :articleTitle, articleSummary = :articleSummary, articleBody = :articleBody, articleStatus= :articleStatus, articleLink = :articleLink, articleModified = :articleModified WHERE articleId = :articleId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleTitle',   $articleData['articleTitle'],   PDO::PARAM_STR);
  $stmt->bindValue(':articleSummary', $articleData['articleSummary'], PDO::PARAM_STR);
  $stmt->bindValue(':articleBody',    $articleData['articleBody'],    PDO::PARAM_STR);
  $stmt->bindValue(':articleStatus',  $articleData['articleStatus'],  PDO::PARAM_STR);
  $stmt->bindValue(':articleLink',    $articleData['articleLink'],    PDO::PARAM_STR);
  $stmt->bindValue(':articleModified',$articleData['articleModified'],PDO::PARAM_STR);
  $stmt->bindValue(':articleId',      $articleData['articleId'],      PDO::PARAM_INT);
  // $stmt->bindValue(':articleImagePath',    $articleData['articleImage'],    PDO::PARAM_STR);
  $stmt->execute();
  $rowsChanged = $stmt->rowCount();
  $stmt->closeCursor();
  return $rowsChanged;
}

function update_article_status($articleData) {
  $db = dbConnect();
  $sql = 'UPDATE article SET articleStatus= :articleStatus, articleModified = :articleModified WHERE articleId = :articleId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleStatus',  $articleData['articleStatus'],  PDO::PARAM_STR);
  $stmt->bindValue(':articleModified',$articleData['articleModified'],PDO::PARAM_STR);
  $stmt->bindValue(':articleId',      $articleData['articleId'],      PDO::PARAM_INT);
  $stmt->execute();
  $rowsChanged = $stmt->rowCount();
  $stmt->closeCursor();
  return $rowsChanged;
}

// delete article

function delete_article($articleId) {
  $db = dbConnect();
  $sql = 'DELETE FROM article WHERE articleId = :articleId';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleId', $articleId, PDO::PARAM_INT);
  $stmt->execute();
  $rowsChanged = $stmt->rowCount();
  $stmt->closeCursor();
  return $rowsChanged;
}

// get article by id

function get_article_by_id($articleId) {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          WHERE article.articleId = :articleId";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleId', $articleId, PDO::PARAM_INT);
  $stmt->execute();
  $articleData = $stmt->fetchAll(PDO::FETCH_NAMED);
  $stmt->closeCursor();
  return $articleData;
}

// get article by name

function get_article_by_title($articleTitle) {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          WHERE articleTitle = :articleTitle";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':articleTitle', $articleTitle, PDO::PARAM_STR);
  $stmt->execute();
  $articleData = $stmt->fetchAll(PDO::FETCH_NAMED);
  $stmt->closeCursor();
  return $articleData;
}

// get all articles

function get_articles() {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          ORDER BY articleCreated ASC";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $articleData = $stmt->fetchAll(PDO::FETCH_NAMED);
  $stmt->closeCursor();
  return $articleData;
}

function get_published_articles () {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          WHERE articleStatus = 'published'
          ORDER BY articleCreated DESC";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $articleData = $stmt->fetchAll(PDO::FETCH_NAMED);
  $stmt->closeCursor();
  return $articleData;
}

function get_articles_by_userId($userId) {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          WHERE article.userId = :userId
          ORDER BY articleCreated ASC";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':userId', $userId, PDO::PARAM_STR);
  $stmt->execute();
  $articleData = $stmt->fetchAll(PDO::FETCH_NAMED);
  $stmt->closeCursor();
  return $articleData;
}


// get variable articles
// Implement the number here
function get_number_of_articles($numberOfArticles) {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          ORDER BY articleCreated DESC LIMIT " . $numberOfArticles;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $articles;
}

function get_number_of_published_articles($numberOfArticles) {
  $db = dbConnect();
  $sql = "SELECT article.*, asset.*  FROM article
          LEFT JOIN asset_assignment AS aa ON article.articleId = aa.articleId
          LEFT JOIN asset ON aa.assetId = asset.assetId
          WHERE articleStatus = 'published'
          ORDER BY articleCreated DESC LIMIT " . $numberOfArticles;
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt->closeCursor();
  return $articles;
}