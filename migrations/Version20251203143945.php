<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251203143945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE mess_request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, date DATE NOT NULL, nombre_convives INTEGER DEFAULT NULL, petit_dejeuner BOOLEAN DEFAULT 0 NOT NULL, dejeuner BOOLEAN DEFAULT 0 NOT NULL, pauses BOOLEAN DEFAULT 0 NOT NULL, diner BOOLEAN DEFAULT 0 NOT NULL, commentaires CLOB DEFAULT NULL, sent_at DATETIME NOT NULL, user_id INTEGER NOT NULL, CONSTRAINT FK_1206E1F3A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1206E1F3A76ED395 ON mess_request (user_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE mess_request
        SQL);
    }
}
