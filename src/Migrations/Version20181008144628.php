<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181008144628 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lamasticot DROP FOREIGN KEY FK_3D30DD8966B566E');
        $this->addSql('DROP INDEX IDX_3D30DD8966B566E ON lamasticot');
        $this->addSql('ALTER TABLE lamasticot DROP fur_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lamasticot ADD fur_id INT NOT NULL');
        $this->addSql('ALTER TABLE lamasticot ADD CONSTRAINT FK_3D30DD8966B566E FOREIGN KEY (fur_id) REFERENCES fur (id)');
        $this->addSql('CREATE INDEX IDX_3D30DD8966B566E ON lamasticot (fur_id)');
    }
}
