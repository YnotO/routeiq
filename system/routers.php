case 'save_location':
    header('Content-Type: application/json');
    $input = json_decode(file_get_contents('php://input'), true);

    $name = $input['name'] ?? null;
    $coordinates = $input['coordinates'] ?? null;

    if ($name && $coordinates) {
        $router = ORM::for_table('tbl_routers')->create();
        $router->name = $name;
        $router->coordinates = $coordinates;
        $router->description = 'Added from map';
        $router->coverage = 1000;
        $router->enabled = 1;
        $router->save();

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Missing name or coordinates']);
    }
    exit();
