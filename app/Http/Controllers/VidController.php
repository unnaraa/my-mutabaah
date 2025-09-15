<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VidController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.dataVideo.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.dataVideo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url'
        ]);

        // Convert share link to embed link
        $embedLink = $this->convertToEmbedLink($request->link);

        Video::create([
            'judul' => $request->judul,
            'link' => $embedLink,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video added successfully');
    }

    public function show(Video $video)
    {
        return view('admin.dataVideo.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('admin.dataVideo.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|url'
        ]);

        $embedLink = $this->convertToEmbedLink($request->link);

        $video->update([
            'judul' => $request->judul,
            'link' => $embedLink,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video updated successfully');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video deleted successfully');
    }

    private function convertToEmbedLink($link)
    {
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtu\.be\/([^\?])|youtube\.com\/.*v=([^\&])/', $link, $matches);
        $videoId = $matches[1] ?? $matches[2] ?? null;

        if ($videoId) {
            return "https://www.youtube.com/embed/{$videoId}";
        }

        return $link; // Return original if no match
    }
}