<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413221249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__article AS SELECT id, title, text, image, updated_at FROM article');
        $this->addSql('DROP TABLE article');
        $this->addSql('CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text CLOB NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME)');
        $this->addSql('INSERT INTO article (id, title, text, image, updated_at) SELECT id, title, text, image, updated_at FROM __temp__article');
        $this->addSql('DROP TABLE __temp__article');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__article AS SELECT id, title, text, image, updated_at FROM article');
        $this->addSql('DROP TABLE article');
        $this->addSql('CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, text CLOB NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL, readtime DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('INSERT INTO article (id, title, text, image, updated_at) SELECT id, title, text, image, updated_at FROM __temp__article');
        $this->addSql('DROP TABLE __temp__article');
    }
}
