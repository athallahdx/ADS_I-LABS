<?PHP

require_once __DIR__ . '/../Repositories/PraktikumRepository.php';


class PraktikumService {
    private $praktikumRepository;


    public function __construct() {
        $this->praktikumRepository = new PraktikumRepository();
    }

    public function insert($data) {
        return $this->praktikumRepository->insert($data);
    }



    public function getPraktikumByUserIdAndSemester($id_user, $semester) {
        return $this->praktikumRepository->selectShiftPraktikumByUserIdAndSemester($id_user, $semester);
    }

}