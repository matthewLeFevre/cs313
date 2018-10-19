

-- -----------------------------------------------------
-- Table "user"
-- -----------------------------------------------------
DROP TABLE IF EXISTS "user" ;

CREATE TABLE IF NOT EXISTS "user" (
  "userId" SERIAL,
  "userName" VARCHAR(45) NULL,
  "userEmail" VARCHAR(45) NOT NULL,
  "userPassword" VARCHAR(255) NOT NULL,
  "userJoined" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "userFirstName" VARCHAR(45) NULL,
  "userLastName" VARCHAR(45) NULL,
  "userStatus" VARCHAR(12) NOT NULL DEFAULT 'basic',
  PRIMARY KEY ("userId"));

-- INSERT INTO "user" (userName, userEmail, userPassword, userStatus) VALUES ("matthew", "matthewlefevre95@gmail.com", "letMeIn", "administrator");
INSERT INTO "user" ("userName", "userEmail", "userPassword") VALUES ( 'joey', 'joeyray', 'letmeintoo');


-- -----------------------------------------------------
-- Table "asset"
-- -----------------------------------------------------
DROP TABLE IF EXISTS "asset" ;

CREATE TABLE IF NOT EXISTS "asset" (
  "assetId" SERIAL,
  "assetPath" VARCHAR(255) NOT NULL,
  "assetName" VARCHAR(45) NOT NULL,
  "assetCreated" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "assetStatus" VARCHAR(10) NOT NULL DEFAULT 'saved',
  "userId" INT NOT NULL,
  PRIMARY KEY ("assetId"),
  CONSTRAINT "fk_asset_user1"
    FOREIGN KEY ("userId")
    REFERENCES "user" ("userId")
    ON DELETE CASCADE
    ON UPDATE CASCADE);

    INSERT INTO "asset" ("assetPath", "assetName", "userId") VALUES ( '//c:/asset.jpg', 'asset', '1');







-- -----------------------------------------------------
-- Table "article"
-- -----------------------------------------------------
DROP TABLE IF EXISTS "article" ;

CREATE TABLE IF NOT EXISTS "article" (
  "articleId" SERIAL,
  "articleTitle" VARCHAR(255) NOT NULL,
  "articleSummary" VARCHAR(255) NULL,
  "articleCreated" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "articleBody" TEXT NULL,
  "articleStatus" VARCHAR(10) NOT NULL DEFAULT 'saved',
  "userId" INT NOT NULL,
  PRIMARY KEY ("articleId"),
  CONSTRAINT "fk_article_user1"
    FOREIGN KEY ("userId")
    REFERENCES "user" ("userId")
    ON DELETE CASCADE
    ON UPDATE CASCADE);



-- -----------------------------------------------------
-- Table "comment"
-- -----------------------------------------------------
DROP TABLE IF EXISTS "comment" ;

CREATE TABLE IF NOT EXISTS "comment" (
  "commentId" SERIAL,
  "commentCreated" TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  "commentBody" VARCHAR(255) NOT NULL,
  "userId" INT NOT NULL,
  "articleId" INT NULL,
  PRIMARY KEY ("commentId"),
  CONSTRAINT "fk_comment_article1"
    FOREIGN KEY ("articleId")
    REFERENCES "article" ("articleId")
    ON DELETE CASCADE
    ON UPDATE CASCADE);

-- -----------------------------------------------------
-- Table "asset_assignment"
-- -----------------------------------------------------
DROP TABLE IF EXISTS "asset_assignment" ;

CREATE TABLE IF NOT EXISTS "asset_assignment" (
  "assignmentId" SERIAL,
  "assetId" INT NOT NULL,
  "articleId" INT NULL,
  PRIMARY KEY ("assignmentId"),
  CONSTRAINT "fk_asset_assignment_asset1"
    FOREIGN KEY ("assetId")
    REFERENCES "asset" ("assetId")
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT "fk_asset_assignment_article1"
    FOREIGN KEY ("articleId")
    REFERENCES "article" ("articleId")
    ON DELETE CASCADE
    ON UPDATE CASCADE);



