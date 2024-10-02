<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240926172729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D4B89032C');
        $this->addSql('DROP INDEX IDX_5A8A6C8D4B89032C ON post');
        $this->addSql('ALTER TABLE post CHANGE post_id id_master_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D93866736 FOREIGN KEY (id_master_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D93866736 ON post (id_master_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D93866736');
        $this->addSql('DROP INDEX IDX_5A8A6C8D93866736 ON post');
        $this->addSql('ALTER TABLE post CHANGE id_master_id post_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D4B89032C ON post (post_id)');
    }
}
