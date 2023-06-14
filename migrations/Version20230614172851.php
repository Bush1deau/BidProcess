<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230614172851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE request (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, customer_name VARCHAR(255) NOT NULL, opportunity_type VARCHAR(255) NOT NULL, product_category VARCHAR(255) NOT NULL, opportunity_margin INT NOT NULL, contract_start DATE NOT NULL, contract_duration INT NOT NULL, tech_and_comm_parts LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', pricing_model LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', scope_query VARCHAR(255) NOT NULL, country LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', bids_and_tenders_read DATE NOT NULL, additional_content LONGTEXT NOT NULL, attachement LONGBLOB DEFAULT NULL, status_query VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE request');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
