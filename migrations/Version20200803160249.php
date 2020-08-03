<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200803160249 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partners ADD img11 VARCHAR(255) DEFAULT NULL, ADD img12 VARCHAR(255) DEFAULT NULL, ADD img13 VARCHAR(255) DEFAULT NULL, ADD img14 VARCHAR(255) DEFAULT NULL, ADD img15 VARCHAR(255) DEFAULT NULL, ADD img16 VARCHAR(255) DEFAULT NULL, ADD img17 VARCHAR(255) DEFAULT NULL, ADD img18 VARCHAR(255) DEFAULT NULL, ADD img19 VARCHAR(255) DEFAULT NULL, ADD img20 VARCHAR(255) DEFAULT NULL, ADD img21 VARCHAR(255) DEFAULT NULL, ADD img22 VARCHAR(255) DEFAULT NULL, ADD img23 VARCHAR(255) DEFAULT NULL, ADD img24 VARCHAR(255) DEFAULT NULL, ADD img25 VARCHAR(255) DEFAULT NULL, ADD img26 VARCHAR(255) DEFAULT NULL, ADD img27 VARCHAR(255) DEFAULT NULL, ADD img28 VARCHAR(255) DEFAULT NULL, ADD img29 VARCHAR(255) DEFAULT NULL, ADD img30 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE partners DROP img11, DROP img12, DROP img13, DROP img14, DROP img15, DROP img16, DROP img17, DROP img18, DROP img19, DROP img20, DROP img21, DROP img22, DROP img23, DROP img24, DROP img25, DROP img26, DROP img27, DROP img28, DROP img29, DROP img30');
    }
}
