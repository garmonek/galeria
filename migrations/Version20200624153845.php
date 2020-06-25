<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200624153845 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CBF396750');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C488626AA FOREIGN KEY (wallpaper_id) REFERENCES wallpapers (id)');
        $this->addSql('CREATE INDEX IDX_9474526C488626AA ON comment (wallpaper_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C488626AA');
        $this->addSql('DROP INDEX IDX_9474526C488626AA ON comment');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CBF396750 FOREIGN KEY (id) REFERENCES wallpapers (id)');
    }
}