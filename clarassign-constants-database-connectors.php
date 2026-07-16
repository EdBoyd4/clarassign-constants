<?php
declare(strict_types=1);

class ClarassignDB {
    private static ?array $env = null;
    private static ?mysqli $candA = null;
    private static ?mysqli $fandJ = null;
    private static ?mysqli $pros = null;
    private static ?mysqli $iandT = null;
    private static ?mysqli $partisans = null;
    private static ?mysqli $productionTools = null;

    private static function getEnv(string $key): string {
        if (self::$env === null) {
            $envPath = __DIR__ . '/../../.env';
            if (!file_exists($envPath)) {
                throw new RuntimeException("Environment file not found at $envPath");
            }
            self::$env = parse_ini_file($envPath);
            if (self::$env === false) {
                throw new RuntimeException("Failed to parse .env file");
            }
        }
        return self::$env[$key] ?? '';
    }

    private static function createConnection(string $key, string $host, string $user, string $pass, string $name): mysqli {
        $conn = mysqli_init();
        if (!$conn) {
            throw new RuntimeException("{$key} DB init failed");
        }
        $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);

        try {
            $conn->real_connect($host, $user, $pass, $name);
            $conn->set_charset('utf8mb4');
        } catch (mysqli_sql_exception $e) {
            error_log("{$key} DB connection failed: " . $e->getMessage());
            throw new RuntimeException("{$key} DB connection failed");
        }
        
        return $conn;
    }

    public static function getCandACnx(): mysqli {
        if (self::$candA === null) {
            self::$candA = self::createConnection(
                'CandA',
                self::getEnv('C_AND_A_HOST'),
                self::getEnv('C_AND_A_USER'),
                self::getEnv('C_AND_A_PASS'),
                self::getEnv('C_AND_A_NAME')
            );
        }
        return self::$candA;
    }

    public static function getFandJCnx(): mysqli {
        if (self::$fandJ === null) {
            self::$fandJ = self::createConnection(
                'FandJ',
                self::getEnv('F_AND_J_HOST'),
                self::getEnv('F_AND_J_USER'),
                self::getEnv('F_AND_J_PASS'),
                self::getEnv('F_AND_J_NAME')
            );
        }
        return self::$fandJ;
    }

    public static function getProsCnx(): mysqli {
        if (self::$pros === null) {
            self::$pros = self::createConnection(
                'Pros',
                self::getEnv('CLAR_PROS_HOST'),
                self::getEnv('CLAR_PROS_USER'),
                self::getEnv('CLAR_PROS_PASS'),
                self::getEnv('CLAR_PROS_NAME')
            );
        }
        return self::$pros;
    }

    public static function getIandTCnx(): mysqli {
        if (self::$iandT === null) {
            self::$iandT = self::createConnection(
                'IandT',
                self::getEnv('I_AND_T_HOST'),
                self::getEnv('I_AND_T_USER'),
                self::getEnv('I_AND_T_PASS'),
                self::getEnv('I_AND_T_NAME')
            );
        }
        return self::$iandT;
    }

    public static function getPartisansCnx(): mysqli {
        if (self::$partisans === null) {
            self::$partisans = self::createConnection(
                'Partisans',
                self::getEnv('PARTISANS_HOST'),
                self::getEnv('PARTISANS_USER'),
                self::getEnv('PARTISANS_PASS'),
                self::getEnv('PARTISANS_NAME')
            );
        }
        return self::$partisans;
    }

    public static function getProductionToolsCnx(): mysqli {
        if (self::$productionTools === null) {
            self::$productionTools = self::createConnection(
                'ProductionTools',
                self::getEnv('CLAR_PRODUCTION_TOOLS_HOST'),
                self::getEnv('CLAR_PRODUCTION_TOOLS_USER'),
                self::getEnv('CLAR_PRODUCTION_TOOLS_PASS'),
                self::getEnv('CLAR_PRODUCTION_TOOLS_NAME')
            );
        }
        return self::$productionTools;
    }
}
