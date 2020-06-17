<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200617190930 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wallpapers ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE wallpapers ADD CONSTRAINT FK_2903318C12469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_2903318C12469DE2 ON wallpapers (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wallpapers DROP FOREIGN KEY FK_2903318C12469DE2');
        $this->addSql('DROP INDEX IDX_2903318C12469DE2 ON wallpapers');
        $this->addSql('ALTER TABLE wallpapers DROP category_id');
    }
}
