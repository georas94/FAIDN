<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200707101505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE partners (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, img1 VARCHAR(255) NOT NULL, img2 VARCHAR(255) DEFAULT NULL, img3 VARCHAR(255) DEFAULT NULL, img4 VARCHAR(255) DEFAULT NULL, img5 VARCHAR(255) DEFAULT NULL, img6 VARCHAR(255) DEFAULT NULL, img7 VARCHAR(255) DEFAULT NULL, img8 VARCHAR(255) DEFAULT NULL, img9 VARCHAR(255) DEFAULT NULL, img10 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE partners');
    }
}
