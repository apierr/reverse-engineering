<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150326165734 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, name TEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, id_course INT DEFAULT NULL, name TEXT DEFAULT NULL, INDEX fk_course (id_course), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF3330A9DA54 FOREIGN KEY (id_course) REFERENCES course (id)');
        $this->addSql('ALTER TABLE order__order CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE order__order_audit CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE invoice__invoice CHANGE currency currency CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE invoice__invoice_audit CHANGE currency currency CHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE basket__basket CHANGE currency currency CHAR(3) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF3330A9DA54');
        $this->addSql('DROP TABLE course');
        $this->addSql('DROP TABLE student');
        $this->addSql('ALTER TABLE basket__basket CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice CHANGE currency currency CHAR(3) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE invoice__invoice_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE order__order_audit CHANGE currency currency CHAR(3) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
