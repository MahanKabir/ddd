<?php

namespace App\Infrastructure\Product\Persistence\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const TABLE = 'products';

    const COLUMN_NAME = 'name';

    const COLUMN_SERIAL = 'serial';

    const COLUMN_AMOUNT = 'amount';

    public function getName(): string
    {
        return $this->{self::COLUMN_NAME};
    }

    public function setName(string $value): self
    {
        $this->{self::COLUMN_NAME} = $value;

        return $this;
    }

    public function getSerial(): string
    {
        return $this->{self::COLUMN_SERIAL};
    }

    public function setSerial(string $value): self
    {
        $this->{self::COLUMN_SERIAL} = $value;

        return $this;
    }

    public function getAmount(): string
    {
        return $this->{self::COLUMN_AMOUNT};
    }

    public function setAmount(string $value): self
    {
        $this->{self::COLUMN_AMOUNT} = $value;

        return $this;
    }
}
