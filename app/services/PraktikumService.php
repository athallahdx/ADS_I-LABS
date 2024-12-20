<?PHP

require_once __DIR__ . '/../Repositories/PraktikumRepository.php';
require_once __DIR__ . '/../Repositories/TugasRepository.php';
require_once __DIR__ . '/../Repositories/MateriRepository.php';


class PraktikumService {
    private $praktikumRepository;
    private $tugasRepository;
    private $materiRepository;


    public function __construct() {
        $this->praktikumRepository = new PraktikumRepository();
        $this->tugasRepository = new TugasRepository();
        $this->materiRepository = new MateriRepository();
    }

    public function insert($data) {
        return $this->praktikumRepository->insert($data);
    }

    public function getPraktikumByUserId($id_user) {
        return $this->praktikumRepository->selectShiftPraktikumByUserId($id_user);
    }

    public function getPraktikumByUserIdAndSemester($id_user, $semester) {
        return $this->praktikumRepository->selectShiftPraktikumByUserIdAndSemester($id_user, $semester);
    }

    public function getTotalTugasByPraktikumIds($praktikumIds) {
        if (empty($praktikumIds)) {
            return 0; // No praktikum means no tugas
        }
    
        return $this->tugasRepository->countTugasByPraktikumIds($praktikumIds);
    }

    public function getTotalMateriByPraktikumIds($praktikumIds) {
        if (empty($praktikumIds)) {
            return 0; // No praktikum means no tugas
        }
    
        return $this->materiRepository->countMateriByPraktikumIds($praktikumIds);
    }

    // Fetch the tasks for the user based on their profil
    public function getTugasByUserProfil($id_profil) {
        return $this->tugasRepository->getTugasByUserProfil($id_profil);
    }

    public function getFileForTugas($id_pengumpulan) {
        return $this->tugasRepository->selectFileForTugas($id_pengumpulan);
    }
    
    public function getTugasByPraktikum($userProfilId) {
        $tasks = $this->tugasRepository->selectTugasByPraktikum($userProfilId);

        // Group tasks by 'nama_praktikum'
        $groupedTasks = [];
        foreach ($tasks as $task) {
            $groupedTasks[$task['nama_praktikum']][] = $task;
        }

        return $groupedTasks;
    }

    public function getMateriByUserProfile($id_profil) {
        // Fetch materi based on user profile ID
        return $this->materiRepository->selectMateriByProfilId($id_profil);
    }

    public function saveFileForTugas($id_profil, $taskId, $fileName) {
        return $this->tugasRepository->insertFileForTugas($id_profil, $taskId, $fileName);
    }

    public function getPraktikumDetail($id_profil, $id_praktikum) {
        return $this->praktikumRepository->selectPraktikumDetails($id_profil, $id_praktikum);
    }

    public function getMateriAndTugas($id_profil, $id_praktikum) {
       return $this->praktikumRepository->selectMateriTugasPengumpulan($id_profil, $id_praktikum);
    }

    public function getPresensiByUser($id_profil) {
        return $this->praktikumRepository->selectPresensiByUser($id_profil);
    }

    public function updatePresensi($id_profil, $id_presensi, $status) {
        return $this->praktikumRepository->updatePresensi($id_profil, $id_presensi, $status);
    }

}